<?php

namespace App\Services;

use App\Models\Project;
use App\Models\Task;
use App\Models\TaskAllocation;
use App\Models\TaskDependency;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class TaskSchedulerService
{

    public ResourceSchedulerService $resourceSchedulerService;

    public function __construct(ResourceSchedulerService $resourceSchedulerService)
    {
        $this->resourceSchedulerService = $resourceSchedulerService;
    }

    /**
     * Schedule whole project
     */
    public function scheduleProject(int $projectId): void
    {

//        DB::transaction(function () use ($projectId) {

            /**
             * Project
             */
            $project = Project::findOrFail($projectId);

            $projectStart = $project->start_date
                ? toCarbon($project->start_date)
                : now();


            /**
             * Load tasks + assignments + users
             */
            $tasks = Task::with([
                'assignments.user'
            ])
                ->where('project_id', $projectId)
                ->get()
                ->keyBy('id');

            /**
             * Dependencies
             */
            $dependencies = TaskDependency::query()
                ->whereIn('successor_id', $tasks->keys())
                ->get();



            /**
             * Reset previous allocations
             */
            TaskAllocation::query()
                ->whereIn('task_id', $tasks->keys())
                ->delete();
        dd($dependencies);
            /**
             * Reset dates
             */
            Task::query()
                ->whereIn('id', $tasks->keys())
                ->update([
                    'start_date' => null,
                    'end_date' => null,
                ]);

            /**
             * Topological order
             */
            $sorted = $this->topologicalSort(
                $tasks,
                $dependencies
            );

            $unscheduled = $tasks->keys()->toArray();

            while (!empty($unscheduled)) {

                $progress = false;

                foreach ($sorted as $taskId) {

                    /**
                     * Already scheduled
                     */
                    if (!in_array($taskId, $unscheduled)) {
                        continue;
                    }

                    $task = $tasks[$taskId];

                    /**
                     * Task dependencies
                     */
                    $taskDeps = $dependencies
                        ->where('successor_id', $taskId);

                    $startConstraints = [];
                    $endConstraints = [];

                    $ready = true;

                    /**
                     * Resolve dependencies
                     */
                    foreach ($taskDeps as $dep) {

                        $parent = $tasks[$dep->predecessor_id] ?? null;

                        if (!$parent) {
                            $ready = false;
                            break;
                        }

                        $preStart = $parent->start_date
                            ? toCarbon($parent->start_date)
                            : null;

                        $preEnd = $parent->end_date
                            ? toCarbon($parent->end_date)
                            : null;

                        switch ($dep->relation_type) {

                            /**
                             * Finish -> Start
                             */
                            case 'FS':

                                if (!$preEnd) {
                                    $ready = false;
                                    break 2;
                                }

                                $startConstraints[] = $preEnd;

                                break;

                            /**
                             * Start -> Start
                             */
                            case 'SS':

                                if (!$preStart) {
                                    $ready = false;
                                    break 2;
                                }

                                $startConstraints[] = $preStart;

                                break;

                            /**
                             * Finish -> Finish
                             */
                            case 'FF':

                                if (!$preEnd) {
                                    $ready = false;
                                    break 2;
                                }

                                $endConstraints[] = $preEnd;

                                break;

                            /**
                             * Start -> Finish
                             */
                            case 'SF':

                                if (!$preStart) {
                                    $ready = false;
                                    break 2;
                                }

                                $endConstraints[] = $preStart;

                                break;
                        }
                    }

                    /**
                     * Dependency unresolved
                     */
                    if (!$ready) {
                        continue;
                    }

                    /**
                     * Earliest possible start
                     */
                    $earliestStart = count($startConstraints)
                        ? collect($startConstraints)->max()
                        : $projectStart;

                    $earliestStart = toCarbon($earliestStart);

                    /**
                     * Resource-based scheduling
                     */
                    $result = $this->resourceSchedulerService
                        ->schedule(
                            $task,
                            $earliestStart
                        );

                    $realStart = $result['start_date'];
                    $realEnd = $result['end_date'];

                    /**
                     * FF / SF correction
                     */
                    if (count($endConstraints)) {

                        $requiredEnd = collect($endConstraints)->max();

                        $requiredEnd = toCarbon($requiredEnd);

                        /**
                         * If scheduled end is before required end
                         * shift task forward
                         */
                        if ($realEnd->lt($requiredEnd)) {

                            $shiftDays = $realEnd
                                ->diffInDays($requiredEnd);

                            $newStart = $realStart
                                ->copy()
                                ->addDays($shiftDays);

                            /**
                             * Re-schedule task
                             */
                            TaskAllocation::query()
                                ->where('task_id', $task->id)
                                ->delete();

                            $result = $this->resourceSchedulerService
                                ->schedule(
                                    $task,
                                    $newStart
                                );

                            $realStart = $result['start_date'];
                            $realEnd = $result['end_date'];
                        }
                    }

                    /**
                     * Save final dates
                     */
                    $task->update([
                        'start_date' => $realStart,
                        'end_date' => $realEnd,
                    ]);

                    /**
                     * Update runtime state
                     */
                    $tasks[$taskId]->start_date = $realStart;
                    $tasks[$taskId]->end_date = $realEnd;

                    /**
                     * Remove from pending
                     */
                    unset(
                        $unscheduled[
                        array_search(
                            $taskId,
                            $unscheduled
                        )
                        ]
                    );

                    $progress = true;
                }

                /**
                 * Circular dependency detection
                 */
                if (!$progress) {
                    throw new Exception(
                        'Circular or invalid dependencies detected'
                    );
                }
            }
//        });
    }

    /**
     * Topological Sort
     */
    private function topologicalSort(
        $tasks,
        $dependencies
    ): array {

        $graph = [];
        $inDegree = [];

        /**
         * Initialize
         */
        foreach ($tasks as $id => $task) {

            $graph[$id] = [];

            $inDegree[$id] = 0;
        }

        /**
         * Build graph
         */
        foreach ($dependencies as $dep) {

            $graph[$dep->predecessor_id][] =
                $dep->successor_id;

            $inDegree[$dep->successor_id]++;
        }

        /**
         * Start nodes
         */
        $queue = [];

        foreach ($inDegree as $id => $degree) {

            if ($degree === 0) {
                $queue[] = $id;
            }
        }

        /**
         * Sort
         */
        $sorted = [];

        while (!empty($queue)) {

            $current = array_shift($queue);

            $sorted[] = $current;

            foreach ($graph[$current] as $neighbor) {

                $inDegree[$neighbor]--;

                if ($inDegree[$neighbor] === 0) {
                    $queue[] = $neighbor;
                }
            }
        }

        /**
         * Loop detection
         */
        if (count($sorted) !== count($tasks)) {

            throw new Exception(
                'Dependency loop detected'
            );
        }

        return $sorted;
    }
}
