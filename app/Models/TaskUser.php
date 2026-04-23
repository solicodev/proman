<?php

namespace App\Models;

use Carbon\Traits\LocalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;

class TaskUser extends Model
{
    use HasFactory , LocalFactory;
    protected $fillable = ['task_id','user_id','progress','status','started_at','completed_at'];


    protected static $logName = 'Tasks assigned to users';

    protected static $logAttributes = ['task_id','user_id','progress','status','started_at','completed_at','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Tasks assigned to users has been {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('task')
            ->logOnly(['task_id','user_id','progress','status','started_at','completed_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Tasks assigned to users has been {$eventName}");
    }
}
