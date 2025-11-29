<?php

namespace App\Http\Controllers\admin\Campaign;

use App\Http\Controllers\Controller;
use App\Models\CampaignBrand;
use Exception;
use Illuminate\Http\Request;

class CampaignBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaignBrands = CampaignBrand::all();
        return view('admin.campaign.campaignBrand.index',get_defined_vars());
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
            $campaignBrand = new CampaignBrand();
            $campaignBrand->name = $request->name;
            if (isset($request->color))
            {
                $campaignBrand->color = $request->color;
            }
            $campaignBrand->save();
            return redirect(route('admin.campaign.brand.index'))->with('flash_message', 'با موفقیت ایجاد شد');

        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CampaignBrand $campaignBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CampaignBrand $campaignBrand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampaignBrand $campaignBrand)
    {
        try {

            $campaignBrand->name = $request->name;
            if (isset($request->color))
            {
                $campaignBrand->color = $request->color;
            }
            $campaignBrand->update();

            return redirect(route('admin.campaign.brand.index'))->with('flash_message', 'با موفقیت ویرایش شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampaignBrand $campaignBrand)
    {
        try {
            $campaignBrand->delete();

            return redirect(route('admin.campaign.brand.index'))->with('flash_message', 'با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }
}
