<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class InfluencerStory extends Model
{
    use LogsActivity, SoftDeletes , HasFactory;

    protected $guarded = [];

    protected $fillable = ['influencer_id','story_link','views','reach','interaction','profile_activity','like_count','share_count','save_count','comment_count','deleted_at','created_at','updated_at'];
    protected static $logName = 'Influencer Story';

    protected static $logAttributes = ['influencer_id','story_link','views','reach','interaction','profile_activity','like_count','share_count','save_count','comment_count','deleted_at','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Influencer Story has been {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Influencer Story')
            ->logOnly(['influencer_id','story_link','views','reach','interaction','profile_activity','like_count','share_count','save_count','comment_count','deleted_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Influencer Story has been {$eventName}");
    }

    public function influencer()
    {
        return $this->belongsTo(Influencer::class , 'influencer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }


}
