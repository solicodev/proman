<?php

namespace App\Http\Controllers\admin\Campaign;

use App\Http\Controllers\Controller;
use App\Imports\CampaignImport;
use App\Models\Campaign;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::all();
        return view('admin.campaign.index',get_defined_vars());
    }

    public function import(Request $request)
    {

            $file = Carbon::now()->microsecond . '.' . $request->file('excel')->extension();
            $upload = $request->file('excel')->storeAs('assets/uploads/campaign/', $file, 'public');
            $excel = \Maatwebsite\Excel\Facades\Excel::import(new CampaignImport(), $upload, 'public', \Maatwebsite\Excel\Excel::XLSX);
            return redirect()->route('admin.campaign.index')->with('flash_message', 'با موفقیت انجام شد');
        try {
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
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
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
