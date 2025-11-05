<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskCheckListRequest;
use App\Models\Task;
use App\Models\TaskChecklist;
use App\Services\TaskCheckListService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskChecklistController extends Controller
{
    public TaskCheckListService $taskChecklistService;
    public function __construct(TaskCheckListService $taskCheckListService)
    {
        $this->taskChecklistService = $taskCheckListService;
    }
    public function store(TaskCheckListRequest $request , Task $task)
    {
        try {
            DB::beginTransaction();
            $this->taskChecklistService->store($request->all(),$task);
            return redirect()->back()->with('flash_message', ' با موفقیت ایجاد شد :)');


            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('err_message', 'خطایی رخ داد :('.$exception->getMessage());
        }
    }

    public function check(TaskChecklist $taskChecklist ,Request $request)
    {
        try {
            $taskChecklist->check = $request->has('check')  ? '1' : '0';
            $taskChecklist->update();

            return response()->json(['success' => true,'flash_message' => 'انجام شد' , 'checked' => $taskChecklist->check]);
        } catch (Exception $exception) {
            return response()->json(['success' => false, 'err_message' => $exception->getMessage()]);
        }
    }

    public function addstore(TaskCheckListRequest $request , Task $task)
    {

        $item = $this->taskChecklistService->store($request->all(),$task);

        return response()->json([
            'success' => true,
            'flash_message' => 'آیتم جدید با موفقیت افزوده شد.',
            'item' => $item,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(TaskChecklist $taskChecklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskChecklist $taskChecklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskChecklist $taskChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskChecklist $taskChecklist)
    {
        //
    }
}
