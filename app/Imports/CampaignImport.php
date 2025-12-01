<?php

namespace App\Imports;

use App\Models\Campaign;
use Illuminate\Support\Collection;
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
        dd($explode_campaign);
        $campaign = Campaign::where('name', $row['name'])->first();
    }
}
