<?php

namespace App\Http\Controllers\admin\Campaign;

use App\Http\Controllers\Controller;
use App\Models\CampaignAgancy;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignAgancyController extends Controller
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
        $campaignAgancies = CampaignAgancy::get();
        return view('admin.campaign.campaignAgancy.index',get_defined_vars());
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

            $campaignAgancy = new CampaignAgancy();
            $campaignAgancy->name = $request->name;
            $campaignAgancy->save();

            return redirect(route('admin.campaign.agancy.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CampaignAgancy $campaignAgancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CampaignAgancy $campaignAgancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampaignAgancy $campaignAgancy)
    {
        try {
            $campaignAgancy->name = $request->name;
            $campaignAgancy->update();
            return redirect(route('admin.campaign.agancy.index'))->with('flash_message', 'با موفقیت ویرایش شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampaignAgancy $campaignAgancy)
    {
        try {

            $campaignAgancy->delete();

            return redirect(route('admin.campaign.agancy.index'))->with('flash_message', 'با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }
}
