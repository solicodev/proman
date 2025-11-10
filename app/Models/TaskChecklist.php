<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class TaskChecklist extends Model
{

    use  LogsActivity;

    protected static $logName = 'TaskCheckList';

    protected static $logAttributes = ['title','check','task_id','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "TaskCheckList has been {$eventName}";
    }

    protected $fillable = ['task_id' , 'title'];


    public function task()
    {
        return $this->belongsTo(Task::class,'task_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('TaskCheckList')
            ->logOnly(['title','check','task_id','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "TaskCheckList has been {$eventName}");
    }
}
