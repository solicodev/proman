<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImplementeUnit;
use App\Models\Team;
use Exception;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $units = ImplementeUnit::all();
        return view('admin.teams.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $team = new Team();
            $team->name = $request->name;
            $team->unit_id = $request->unit_id ?? null;
            $team->save();

            return redirect(route('admin.team.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        try {
            $team->name = $request->name;
            $team->unit_id = $request->unit_id ?? null;
            $team->update();

            return redirect(route('admin.team.index'))->with('flash_message', 'با موفقیت ویرایش شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        try {
            $team->delete();
            return redirect(route('admin.team.index'))->with('flash_message', 'با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', 'خطایی رخ داد مجددا تلاش کنید');
        }
    }
}
