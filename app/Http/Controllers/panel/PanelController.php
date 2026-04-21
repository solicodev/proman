<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectManagerAdmin;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $project_id = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->pluck('id')->toArray();
        $tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->whereIn('project_id',$project_id)->get();

        $total = $tasks->count();
        $pending = $tasks->where('status', 0)->count();
        $todo = $tasks->where('status', 1)->count();
        $in_progress = $tasks->where('status', 2)->count();
        $Done = $tasks->where('status', 3)->count();


        $projects = Project::with(['manager','category','department','members','photos','brand'])->where('manager_id',Auth::id())->get();

        $members = Project::where('manager_id',Auth::id())->with('members')->get()->pluck('members')->flatten()->unique('id');



        $days = [];

        for ($i = 0; $i < 10; $i++) {
            $date = Carbon::today()->addDays($i);
            $tasks = Task::whereDate('start_date', verta($date)->format('Y/m/d'))
                ->whereIn('project_id',$project_id)->get();

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

        $high_tasks = Task::with(['project','manager','watcher','assigners','photos','predecessors','successors'])->whereIn('project_id',$project_id)->where('priority','2')->get();
        $array_tasks = Task::with(['project','manager','watcher','assigners','photos','parent','children'])->whereNull('parent_id')->where('project_id',$project_id)->get();


        $managerIds = DB::table('project_manager_admins')
            ->where('admin_id', $user->id)
            ->pluck('project_manager_id');

        $projectsAsManager = Project::where('manager_id', $user->id);

        $projectsAsAdmin = Project::whereIn('manager_id', $managerIds);

        $projectIds = $projectsAsManager->select('id')->union($projectsAsAdmin->select('id'))->with(['manager','category','department','members','photos','brand'])->pluck('id');

        $tb_tasks = Task::with([
            'children.assigners.photo',
            'project',
            'manager',
            'watcher',
            'assigners',
            'photos',
            'parent'
        ])
            ->whereNull('parent_id')
            ->where(function ($q) use ($projectIds, $user) {
                $q->where('user_id', $user->id)

                    ->orWhereHas('assigners', function ($q2) use ($user) {
                        $q2->where('user_id', $user->id);
                    })
                    ->orWhereNull('project_id')
                    ->orWhereIn('project_id', $projectIds);
            })
            ->get();

//        dd($tb_tasks,$array_tasks,$tasks , $project_id , $total,$pending,$todo,$in_progress,$Done , $projects, $members , $last_projects );

        return view('proMan.index',get_defined_vars());
    }


    public function access()
    {

        $projects = Project::with('members')->where('manager_id',Auth::id())->get();

        $users =  $projects->pluck('members')->flatten()->unique('id');
        $roles = Role::all();
        $permissions = Permission::all();

        $permission_lists = Permission::get();
        $groupedPermissions = collect($permission_lists)->groupBy(function($permission) {
            return explode('_', $permission->name)[0];
        });


        return view('proMan.user.access',get_defined_vars());
    }

    public function accessUpdate(User $user,Request $request)
    {
        try {
            $user->permissions()->sync($request->permissions);
            return redirect(route('dashboard.access'))->with('flash_message', ' تغییرات اعمال شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
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
