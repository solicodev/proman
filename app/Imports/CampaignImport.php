<?php

namespace App\Imports;

use App\Models\Campaign;
use App\Models\CampaignAgancy;
use App\Models\CampaignBrand;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CampaignImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {
        $explode_campaign = explode(' - ' , $row['campaign']);
        $campaign = Campaign::where('campaign_code', $explode_campaign[0])->first();
        if(!$campaign)
        {
            $status = '0';
            if ($row['done'])
            {
                switch ($row['done']) {

                    case 'hold':
                        $status = '0';
                        break;

                    case 'In progress':
                        $status = '1';
                        break;

                    case 'Active':
                        $status ='2';
                        break;

                    case 'Done':
                        $status = '3';
                        break;

                    case 'Postponed':
                        $status = '4';
                        break;

                    case 'Rejected':
                        $status = '5';
                        break;
                }
            }

            $campaign = new Campaign();

            $campaign->campaign_code = $explode_campaign[0];

            dd($explode_campaign,count($explode_campaign) , $row , array_first($explode_campaign) ,
            array_last($explode_campaign) , array_diff($explode_campaign)
            );

            $campaign->name = $explode_campaign[1] . ' - ' . $explode_campaign[2];

            $campaign->start_date_j = $row['start_campaignshamsi'];
            if ($row['start_campaignshamsi'])
            {
                $campaign->start_date_g = Verta::parse($row['start_campaignshamsi'])->format('Y/m/d');
            }
            $campaign->forecast_end_time_j = $row['end_campaign_shamsi'];
            if ($row['end_campaign_shamsi'])
            {
                $campaign->forecast_end_time_g = Verta::parse($row['end_campaign_shamsi'])->format('Y/m/d');
            }
            $campaign->budget = $row['budget_campaign'];
            $campaign->status = $status;
            $campaign->user_id = Auth::id();


            $agancyName = trim($row['agancy'] ?? '');

            if ($agancyName !== '')
            {
                $agancy = CampaignAgancy::firstOrCreate(['name' => $agancyName]);

                $campaign->agancy_id = $agancy->id;
            }

            $agancyBrand = trim($row['brand'] ?? '');
            if ($agancyBrand !== '')
            {
                $campaign_brand = CampaignBrand::firstOrCreate(['name' => $agancyBrand, 'color' => 'primary']);
                $campaign->brand_id = $campaign_brand->id;
            }

            $campaign->save();

        }
        return $campaign;
    }
}
