<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project_id = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->pluck('id')->toArray();

        $tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->whereIn('project_id',$project_id)->get();
        $total = $tasks->count();
        $pending = $tasks->where('status', 0)->count();
        $todo = $tasks->where('status', 1)->count();
        $in_progress = $tasks->where('status', 2)->count();
        $Done = $tasks->where('status', 3)->count();

        $projects = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->get();

        $members = Project::with('members')->get()->pluck('members')->flatten()->unique('id');



        $days = [];

        for ($i = 0; $i < 10; $i++) {
            $date = Carbon::today()->addDays($i);

            $tasks = Task::whereDate('start_date', $date->format('Y-m-d'))
                ->get();

            $days[] = [
                'date' => $date,
                'weekday' => $date->format('D'),
                'tasks' => $tasks
            ];
        }


        return view('proMan.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
