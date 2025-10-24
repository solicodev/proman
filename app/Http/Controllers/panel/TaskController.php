<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
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
