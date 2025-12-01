<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class InfluencerInfo extends Model
{
    use HasFactory , SoftDeletes , LogsActivity;
    protected $guarded = [];
    protected $fillable = ['user_id' , 'influencer_id' ,'page_link' , 'category' , 'city' , 'followers' , 'ER' , 'average_like' , 'average_comment' , 'status'
                            , 'deleted_at' , 'created_at' , 'updated_at'];


    protected static $logName = 'Influencer Information';

    protected static $logAttributes = ['user_id' , 'influencer_id' ,'page_link' , 'category' , 'city' , 'followers' , 'ER' , 'average_like' , 'average_comment' , 'status'
        , 'deleted_at' , 'created_at' , 'updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Influencer Information has been {$eventName}";
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Influencer Information')
            ->logOnly(['user_id' , 'influencer_id' ,'page_link' , 'category' , 'city' , 'followers' , 'ER' , 'average_like' , 'average_comment' , 'status'
                , 'deleted_at' , 'created_at' , 'updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Influencer Information has been {$eventName}");
    }
}
