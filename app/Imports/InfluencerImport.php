<?php

namespace App\Imports;

use App\Models\Influencer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InfluencerImport implements ToModel , WithHeadingRow
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
        $influencer = Influencer::where('instagram_id', $row['id'])->first();
        if (!$influencer) {
            $influencer = new Influencer();
            $influencer->instagram_id = $row['id'];
            $influencer->comment = $row['comment'] ?? null;
            $influencer->credibility = $row['credibility'] ?? 0;
            $influencer->save();
        }
        return $influencer;
    }
}
