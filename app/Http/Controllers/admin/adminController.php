<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\Ticket;
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
        $tasks = Task::take(15)->latest()->get();

        $total_projects = Project::get();
        $total_tasks = Task::get();
        $total_tickets = Ticket::get();

        return view('admin.main',get_defined_vars());
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
