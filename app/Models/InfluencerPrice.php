<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class InfluencerPrice extends Model
{
    use HasFactory,LogsActivity , SoftDeletes;

    protected $guarded = [];

    protected $fillable = ['influencer_id','post_price','story_price','post_type','story_type','user_id','deleted_at','created_at','updated_at'];

    protected static $logName = 'Influencer Price';

    protected static $logAttributes = ['influencer_id','post_price','story_price','post_type','story_type','user_id','deleted_at','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Influencer Price has been {$eventName}";
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Influencer Price')
            ->logOnly(['influencer_id','post_price','story_price','post_type','story_type','user_id','deleted_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Influencer Price has been {$eventName}");
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
