<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Task extends Model
{
    use SoftDeletes , LogsActivity;

    protected static $logName = 'task';

    protected static $logAttributes = ['title','description','task_code','status', 'duration','priority','parent_id','project_id','manager_check','manager_id','watcher_id','manager_verify','start_date','end_date','created_at','updated_at','deleted_at'];

    protected static $logOnlyDirty = true;


    public function getDescriptionForEvent(string $eventName): string
    {
        return "task has been {$eventName}";
    }

    protected $fillable = ['title','description','task_code','status','priority','parent_id','start_date','end_date','project_id','manager_id','duration','manager_verify','manager_check','watcher_id'];
    protected $appends = ['TaskStatus', 'TaskPrority'];
    public $status_english =[
        '0' => 'pending' ,
        '1' => 'todo' ,
        '2' => 'in_progress' ,
        '3' => 'Done' ,
    ];

    public $statuses = [
        '0' => '<span class="badge bg-warning text-black">در حال بررسی</span>',
        '1' => '<span class="badge bg-primary text-black">برای انجام</span>',
        '2' => '<span class="badge bg-success text-black">در حال انجام</span>',
        '3' => '<span class="badge bg-secondary text-black">انجام شد</span>',
    ];

    public function getTaskStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
    }

    public $priorities = [
        '0' => '<span class="badge badge-light-primary">کم</span>',
        '1' => '<span class="badge badge-light-warning">متوسط</span>',
        '2' => '<span class="badge badge-light-danger">زیاد</span>',
    ];

    public function getTaskProrityAttribute()
    {
        return $this->priorities[$this->priority] ?? '';
    }


    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function manager()
    {
        return $this->belongsTo(User::class,'manager_id');
    }

    public function watcher()
    {
        return $this->belongsTo(User::class,'watcher_id');
    }

    public function assigners()
    {
        return $this->belongsToMany(User::class,'task_user','task_id','user_id');
    }

    public function photos()
    {
        return $this->belongsToMany(Photo::class,'task_photo','task_id','photo_id');
    }

    public function predecessors()
    {
        return $this->belongsToMany(Task::class,'task_dependencies','successor_id','predecessor_id')
            ->withPivot('relation_Type','lag');
    }

    public function successors()
    {
        return $this->belongsToMany(Task::class,'task_dependencies','predecessor_id','successor_id')
            ->withPivot('relation_Type','lag');
    }

    public function parent()
    {
        return $this->belongsTo(Task::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Task::class, 'parent_id');
    }

    public function taskCheckList()
    {
        return $this->hasMany(TaskChecklist::class, 'task_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'comments')->where('status', 1);
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('task')
            ->logOnly(['title','description','task_code','status', 'duration','priority','parent_id','project_id','manager_check','manager_id','watcher_id','manager_verify','start_date','end_date','created_at','updated_at','deleted_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Task has been {$eventName}");
    }
}
