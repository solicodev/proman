<?php

namespace App\Http\Controllers\admin\Campaign;

use App\Http\Controllers\Controller;
use App\Imports\InfluencerImport;
use App\Models\Influencer;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class InfluencerController extends Controller
{

    public function import(Request $request)
    {
        try {
            $file = Carbon::now()->microsecond . '.' . $request->file('excel')->extension();
            $upload = $request->file('excel')->storeAs('assets/uploads/influencer/', $file, 'public');
            $excel = \Maatwebsite\Excel\Facades\Excel::import(new InfluencerImport(), $upload, 'public', \Maatwebsite\Excel\Excel::XLSX);
            return redirect()->route('admin.campaign.influencer.index')->with('flash_message', 'با موفقیت انجام شد');

    } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Influencers = Influencer::all();
        return view('admin.campaign.influencer.index',get_defined_vars());
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

            $influencer = new Influencer();
            $influencer->instagram_id = $request->instagram_id;
            $influencer->comment = $request->comment ?? null;
            $influencer->credibility = $request->credibility ?? null;
            $influencer->save();

            return redirect(route('admin.campaign.influencer.index'))->with('flash_message', 'با موفقیت ایجاد شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Influencer $influencer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Influencer $influencer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Influencer $influencer)
    {
        try {
            $influencer->instagram_id = $request->instagram_id;
            $influencer->comment = $request->comment ?? null;
            $influencer->credibility = $request->credibility ?? null;
            $influencer->update();
            return redirect(route('admin.campaign.influencer.index'))->with('flash_message', 'با موفقیت ویرایش شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Influencer $influencer)
    {
        try {
            $influencer->delete();
            return redirect(route('admin.campaign.influencer.index'))->with('flash_message', 'با موفقیت حذف شد');
        } catch (Exception $exception) {
            return redirect()->back()->with('err_message', $exception->getMessage());
        }
    }
}
