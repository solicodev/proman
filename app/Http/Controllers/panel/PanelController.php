<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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
            $tasks = Task::whereDate('start_date', verta($date)->format('Y/m/d'))
                ->get();

            $days[] = [
                'date' => verta($date),
                'weekday' => verta($date)->format('D'),
                'tasks' => $tasks
            ];
        }
        $last_projects = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->latest()->take(3)->get();

        foreach ($last_projects as $project) {
            $carbonEnd = \Carbon\Carbon::parse($project->end_date);
            $vEnd = new Verta($carbonEnd);
            $vNow = Verta::now();
            $project->remaining_hours = max(0, ($vEnd->timestamp - $vNow->timestamp) / 3600);
            $project->remaining_days = max(0, ($vEnd->timestamp - $vNow->timestamp) / 86400);
            $project->end_date_jalali = $vEnd->format('Y/m/d');
        }
//        $perPage = 5;
//
//        $page = request()->get('page', 1);
//
//        $collection = collect($days);
//
//        $currentPageItems = $collection->slice(($page - 1) * $perPage, $perPage)->values();
//
//        $daysPaginated = new LengthAwarePaginator(
//            $currentPageItems,
//            $collection->count(),
//            $perPage,
//            $page,
//            ['path' => request()->url(), 'query' => request()->query()]
//        );

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
