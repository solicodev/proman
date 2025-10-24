<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DB;
use App\Models\Task;
use App\Models\TaskDependency;
use App\Services\TaskSchedulerService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function response;

class TaskDependencyController extends Controller
{
    public TaskSchedulerService $taskSchedulerService;
    public function __construct(TaskSchedulerService $taskSchedulerService)
    {
        $this->taskSchedulerService = new $taskSchedulerService;
    }

//    public function store(StoreTaskDependencyRequest $request)
//    {
//        $dependency = $this->scheduler->createDependency(
//            $request->validated()
//        );
//
//        return response()->json([
//            'message' => 'وابستگی با موفقیت ثبت شد.',
//            'data' => $dependency
//        ]);
//    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'predecessor_id' => 'required|exists:tasks,id',
            'successor_id' => 'required|exists:tasks,id|different:predecessor_id',
            'relation_type' => 'required|in:FS,SS,FF,SF',
            'lag' => 'nullable|integer|min:0'
        ]);

        DB::transaction(function () use ($data) {
            // ایجاد وابستگی
            $dependency = TaskDependency::create($data);

            // محاسبه و بروزرسانی زمان‌بندی successor
            $this->updateSuccessorDates($dependency);
        });

        return response()->json(['message' => 'وابستگی با موفقیت ثبت شد.']);
    }

    private function updateSuccessorDates(TaskDependency $dependency)
    {
        $pre = Task::findOrFail($dependency->predecessor_id);
        $succ = Task::findOrFail($dependency->successor_id);
        $lag = $dependency->lag ?? 0;


        $preStart = Carbon::parse($pre->start_date);
        $preEnd   = Carbon::parse($pre->end_date);
        $succStart = Carbon::parse($succ->start_date);
        $succEnd   = Carbon::parse($succ->end_date);
        $duration  = $succ->duration ?? $succEnd->diffInDays($succStart);

        switch ($dependency->relation_type) {
            case 'FS': // Finish → Start
                $newStart = $preEnd->copy()->addDays($lag);
                $succ->start_date = $newStart;
                $succ->end_date   = $newStart->copy()->addDays($duration);
                break;

            case 'SS': // Start → Start
                $newStart = $preStart->copy()->addDays($lag);
                $succ->start_date = $newStart;
                $succ->end_date   = $newStart->copy()->addDays($duration);
                break;

            case 'FF': // Finish → Finish
                $newEnd = $preEnd->copy()->addDays($lag);
                $succ->end_date   = $newEnd;
                $succ->start_date = $newEnd->copy()->subDays($duration);
                break;

            case 'SF': // Start → Finish (نادر ولی پشتیبانی می‌کنیم)
                $newEnd = $preStart->copy()->addDays($lag);
                $succ->end_date   = $newEnd;
                $succ->start_date = $newEnd->copy()->subDays($duration);
                break;
        }

        $succ->save();

        // حالا اگر successor خودش هم successorهایی داشته باشه، زنجیروار آپدیت می‌کنیم
        $this->cascadeUpdate($succ->id);
    }

    private function cascadeUpdate($taskId)
    {
        $successors = TaskDependency::where('predecessor_id', $taskId)->get();
        foreach ($successors as $dep) {
            $this->updateSuccessorDates($dep);
        }
    }
}
