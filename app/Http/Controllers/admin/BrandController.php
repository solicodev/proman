<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Department;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
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
        $brands = Brand::orderBy('created_at', 'desc')->get();
        $parents = Brand::whereNull('parent_id')->get();
        $departments = Department::all();
        return view('admin.brands.index',get_defined_vars());
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
            $brand = new Brand();
            $brand->name = $request->name;
//            $brand->parent_id = $request->parent_id ?? null;
            $brand->photo_id = file_store($request->photo_id, 'uploads/brands/', '');
            $brand->save();
            $brand->department()->attach($request->parent_id);

            return redirect(route('admin.brand.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        try {
            $brand->name = $request->name;
//            $brand->parent_id = $request->parent_id ?? null;
            if (isset($request->photo_id))
            {
                $brand->photo_id = file_store($request->photo_id, 'uploads/brands/', '') ;
            }
            $brand->update();

            $brand->department()->sync($request->parent_id);

            return redirect(route('admin.brand.index'))->with('flash_message', 'با موفقیت ویرایش شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        try {
            $brand->delete();
            return redirect(route('admin.brand.index'))->with('flash_message', 'با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }
}
