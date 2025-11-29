<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $fillable = ['instagram_id','comment','credibility'];

    protected $appends = ['InfluencerCredibility'];
    public $credibilities = [
        '0' => 'True',
        '1' => 'False',
    ];

    public function getInfluencerCredibilityAttribute()
    {
        return $this->credibilities[$this->credibility] ?? '';
    }
}
