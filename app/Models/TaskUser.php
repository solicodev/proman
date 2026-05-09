<?php

namespace App\Models;

use Carbon\Traits\LocalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;

class TaskUser extends Model
{
    use HasFactory , LocalFactory;

    protected $fillable = ['hours_per_day','allocated_hours','task_id','user_id','progress','status','started_at','completed_at'];

    protected static $logName = 'Tasks assigned to users';

    protected static $logAttributes = ['hours_per_day','allocated_hours','task_id','user_id','progress','status','started_at','completed_at','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Tasks assigned to users has been {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('task')
            ->logOnly(['hours_per_day','allocated_hours','task_id','user_id','progress','status','started_at','completed_at','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Tasks assigned to users has been {$eventName}");
    }
    public $statuses = [
        '0' => '<span class="badge bg-warning text-black">شروع</span>',
        '1' => '<span class="badge bg-primary text-black">در حال انجام</span>',
        '2' => '<span class="badge bg-success text-black">انجام شد</span>',
    ];

    public function getTaskStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
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
