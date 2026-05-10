<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class TaskAllocation extends Model
{
    use HasFactory , LogsActivity;
    protected $fillable = [
        'task_id',
        'user_id',
        'work_date',
        'hours',
    ];

    protected $casts = [
        'work_date' => 'date',
        'hours' => 'float',
    ];

    protected static $logName = 'task';

    protected static $logAttributes = [ 'task_id',
        'user_id',
        'work_date',
        'hours','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "task has been {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('task')
            ->logOnly(['task_id',
                'user_id',
                'work_date',
                'hours','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Task has been {$eventName}");
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
