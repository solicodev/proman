<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Campaign extends Model
{
    use HasFactory,SoftDeletes,LogsActivity;
    protected $guarded = [];

    protected $fillable =['name','start_date_j','start_date_m','forecast_end_time_j','forecast_end_time_m','real_end_date_j','real_end_date_m',
        'budget','status','user_id','brand_id','agancy_id'];

    protected static $logName = 'campaign';

    protected static $logAttributes = ['name','start_date_j','start_date_m','forecast_end_time_j','forecast_end_time_m','real_end_date_j','real_end_date_m',
        'budget','status','user_id','brand_id','agancy_id'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "campaign has been {$eventName}";
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('campaign')
            ->logOnly(['name','start_date_j','start_date_m','forecast_end_time_j','forecast_end_time_m','real_end_date_j','real_end_date_m',
                'budget','status','user_id','brand_id','agancy_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "campaign has been {$eventName}");
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function brand()
    {
        return $this->belongsTo(CampaignBrand::class,'brand_id');
    }

    public function agancy()
    {
        return $this->belongsTo(CampaignAgancy::class,'agancy_id');
    }
}
