<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class TaskDependency extends Model
{
    use LogsActivity;
    protected $fillable = ['predecessor_id','successor_id','relation_Type'];

    protected static $logName = 'Task Dependency';

    protected static $logAttributes = ['predecessor_id','successor_id','relation_Type'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Task Dependency has been {$eventName}";
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Task Dependency')
            ->logOnly(['predecessor_id','successor_id','relation_Type','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Task Dependency has been {$eventName}");
    }
}
