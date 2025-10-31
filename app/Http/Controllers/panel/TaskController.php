<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Project $project)
    {
        $tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->where('project_id',$project->id)->paginate(15);
        dd($tasks);
        return view('proMan.projects.tasks',get_defined_vars());
    }

    public function create(Project $project)
    {

        return view('proMan.tasks.create', get_defined_vars());
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'duration' => 'nullable|integer|min:0'
        ]);

        // محاسبه duration اگر داده نشده
        if (empty($data['duration'])) {
            $data['duration'] = now()
                ->parse($data['end_date'])
                ->diffInDays(now()->parse($data['start_date']));
        }

        $task = Task::create($data);

        return response()->json([
            'message' => 'تسک با موفقیت ایجاد شد.',
            'data' => $task
        ]);
    }

    public function storeSubtask(Request $request,Task $parentTask)
    {
        $subtask = $parentTask->children()->create([
            'title' => 'زیرتسک جدید',
            'status' => 0,
            'priority' => 1,
            'duration' => 10,
            'start_date' => now(),
        ]);

        return back()->with('success', 'زیرتسک با موفقیت ایجاد شد.');

    }

    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'name' => 'sometimes|string|max:255',
            'start_date' => 'sometimes|date',
            'end_date' => 'sometimes|date|after_or_equal:start_date',
            'duration' => 'nullable|integer|min:0'
        ]);

        $task->update($data);

        return response()->json([
            'message' => 'تسک با موفقیت به‌روزرسانی شد.',
            'data' => $task
        ]);
    }
}
