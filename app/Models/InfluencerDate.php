<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class InfluencerDate extends Model
{
    use HasFactory ,SoftDeletes ,LogsActivity;

    protected $fillable = ['forecast_date_j','forecast_date_m','publication_date_j','publication_date_m'];

    protected $guarded = [];

    protected static $logName = 'Influencer Date';

    protected static $logAttributes = ['forecast_date_j','forecast_date_m','publication_date_j','publication_date_m','deleted_at','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Influencer Date has been {$eventName}";
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Influencer Date')
            ->logOnly(['forecast_date_j','forecast_date_m','publication_date_j','publication_date_m','deleted_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Influencer Date has been {$eventName}");
    }

    public function influencer()
    {
        return $this->belongsTo(Influencer::class,'influencer_id ');
    }

    public function user_id()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
