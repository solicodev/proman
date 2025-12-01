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

    protected $appends = ['CampaignStatus'];

    protected $fillable =['name','start_date_j','start_date_m','forecast_end_time_j','forecast_end_time_m','real_end_date_j','real_end_date_m',
        'budget','status','user_id','brand_id','agancy_id'];

    protected static $logName = 'campaign';

    protected static $logAttributes = ['name','start_date_j','start_date_m','forecast_end_time_j','forecast_end_time_m','real_end_date_j','real_end_date_m',
        'budget','status','user_id','brand_id','agancy_id','deleted_at','created_at','updated_at'];

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
                'budget','status','user_id','brand_id','agancy_id','deleted_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "campaign has been {$eventName}");
    }

    public $status_english =[
        '0' => 'Hold' ,
        '1' => 'In progress' ,
        '2' => 'Active' ,
        '3' => 'Done' ,
        '4' => 'Postponed' ,
        '5' => 'Rejected' ,
    ];


    public $statuses = [
        '0' => '<span class="badge bg-warning text-black">نگه داشته شد</span>',
        '1' => '<span class="badge bg-primary text-black">به جریان افتاد</span>',
        '2' => '<span class="badge bg-success text-black">فعال</span>',
        '3' => '<span class="badge bg-secondary text-black">انجام شد</span>',
        '4' => '<span class="badge bg-secondary text-black">به تعویق افتاد</span>',
        '5' => '<span class="badge bg-secondary text-black">رد شد</span>',
    ];

    public function getCampaignStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
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
