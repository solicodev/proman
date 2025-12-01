<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Influencer extends Model
{
    use HasFactory,SoftDeletes,LogsActivity;

    protected $fillable = ['instagram_id','comment','credibility'];

    protected $appends = ['InfluencerCredibility'];

    protected static $logname = 'Influencer';

    protected static $logAttributes = ['instagram_id','comment','credibility','deleted_at','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Influencer has been {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Influencer')
            ->logOnly(['instagram_id','comment','credibility','deleted_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "The influencer has been {$eventName}");
    }
    public $credibilities = [
        '0' => 'True',
        '1' => 'False',
    ];

    public function getInfluencerCredibilityAttribute()
    {
        return $this->credibilities[$this->credibility] ?? '';
    }
}
