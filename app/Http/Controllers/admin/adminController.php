<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{

    public function __construct()
    {
        if (!Auth::user()->hasrole('Super Admin'))
        {
            return redirect()->back()->with('err_message', 'شما دسترسی به پنل ادمین ندارید!');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::take(15)->latest()->get();
        $task_items = Task::take(15)->latest()->get();

        $total_projects = Project::get();
        $total_tasks = Task::get();
        $total_tickets = Ticket::get();

        $project_id = Project::with(['manager','category','department','members','photos','brand'])->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {

            $date = Carbon::today()->addDays($i)->toDateString();

            $tasks = Task::with('assigners')
                ->whereDate('start_date', '<=', $date)
                ->whereDate('end_date', '>=', $date)
                ->get();

            $days[] = [
                'date' => verta($date),
                'weekday' => verta($date)->format('D'),
                'tasks' => $tasks
            ];
        }

//        $notifications = auth()->user()->notifications()->latest()->get();
        return view('admin.main',get_defined_vars());
    }

    public function notification()
    {
        $notification_items = auth()->user()->notifications()->latest()->get();
        return view('admin.notifications',get_defined_vars());
    }
}
