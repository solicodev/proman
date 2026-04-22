<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImplementeUnit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImplementeUnitController extends Controller
{

    public function __construct()
    {
        if (!Auth::user()->hasrole(['Super Admin','Admin Panel']))
        {
            return redirect()->back()->with('err_message', 'شما دسترسی به پنل ادمین ندارید!');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $implementeUnits = ImplementeUnit::orderBy('created_at','desc')->get();
        $parents = ImplementeUnit::get();
        return  view('admin.implementes.index',get_defined_vars());
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
        try {
            $implenetUnit = new ImplementeUnit();
            $implenetUnit->name = $request->name;
            $implenetUnit->parent_id = $request->parent_id ?? null;
            $implenetUnit->save();

            return redirect(route('admin.implementeUnit.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ImplementeUnit $implementeUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImplementeUnit $implementeUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImplementeUnit $implementeUnit)
    {
        try {

            $implementeUnit->name = $request->name;
            $implementeUnit->parent_id = $request->parent_id ?? null;
            $implementeUnit->update();

            return redirect(route('admin.implementeUnit.index'))->with('flash_message', 'با موفقیت ویرایش شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImplementeUnit $implementeUnit)
    {
        //
    }
}
