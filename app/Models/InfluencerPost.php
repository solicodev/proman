<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class InfluencerPost extends Model
{
    use HasFactory,LogsActivity , SoftDeletes;

    protected $guarded = [];

    protected $fillable = ['influencer_id','post_id','views','reach','interaction','profile_activity','like_count','share_count','save_count','comment_count','deleted_at','created_at','updated_at'];

    protected static $logName = 'Influencer Post';

    protected static $logAttributes = ['influencer_id','post_id','views','reach','interaction','profile_activity','like_count','share_count','save_count','comment_count','deleted_at','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Influencer Post has been {$eventName}";
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Influencer Post')
            ->logOnly(['influencer_id','post_id','views','reach','interaction','profile_activity','like_count','share_count','save_count','comment_count','deleted_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Influencer Post has been {$eventName}");
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
