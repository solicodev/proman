<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Task extends Model
{
    use SoftDeletes , LogsActivity , Notifiable;

    protected static $logName = 'task';

    protected static $logAttributes = ['implementeunit_id','title','description','task_code','status',
        'duration','duration_type','priority','parent_id','project_id','manager_check',
        'manager_id','watcher_id','manager_verify','start_date','end_date','start_todo_date','between_date','completed_at',
        'created_at','updated_at','deleted_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "task has been {$eventName}";
    }

    protected $fillable = ['implementeunit_id','title','description','task_code','status',
        'priority','parent_id','start_date','end_date','start_todo_date','between_date','project_id',
        'manager_id','duration','duration_type','manager_verify','manager_check','watcher_id','completed_at'];

    protected $appends = ['TaskStatus', 'TaskPrority','DurationType'];

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

    public $durationTypes = [
        'minute' => 'دقیقه',
        'hours' => 'ساعت',
        'day' => 'روز',
        'week' => 'هفته',
        'month' => 'ماه',
        'year' => 'سال',
    ];

    public function getDurationTypeLabelAttribute()
    {
        return $this->durationTypes[$this->duration_type] ?? '';
    }


    protected $casts = [
        'duration' => 'integer',
        'start_date' => 'datetime',
        'end_date'   => 'datetime',
    ];

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
        return $this->belongsToMany(User::class,'task_users','task_id','user_id');
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
        return $this->morphMany(Comment::class, 'comments');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('task')
            ->logOnly(['implementeunit_id','title','description','task_code','status', 'duration','duration_type','priority','parent_id','project_id',
                'manager_check','manager_id','watcher_id','manager_verify','start_date','end_date','start_todo_date',
                'between_date','created_at','updated_at','deleted_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Task has been {$eventName}");
    }


    public function dependencies()
    {
        return $this->hasMany(TaskDependency::class, 'successor_id');
    }

    public function parents()
    {
        return $this->hasMany(TaskDependency::class, 'dependency_task_id');
    }

//    public function calculateAllowedProgress()
//    {
//        if ($this->dependencies->count() === 0) {
//            return 100;
//        }
//
//        $minAllowed = 100;
//
//        foreach ($this->dependencies as $dep) {
//            $source = $dep->dependencyTask;
//            $type = strtoupper($dep->type);
//            $lag = $dep->lag ?? 0;
//
//
//            $sourceProgress = $source->progress_effective ?? $source->progress ?? 0;
//
//            switch ($type) {
//
//                case 'FS': // Finish → Start
//                    // تا A پایان پیدا نکند، B پیشرفت زیادی نمی‌تواند داشته باشد
//                    if ($sourceProgress < 100) {
//                        $minAllowed = min($minAllowed, $sourceProgress);
//                    }
//                    break;
//
//                case 'SS': // Start → Start
//                    // تسک بعدی نمی‌تواند بیشتر از میزان شروع تسک قبل باشد
//                    $minAllowed = min($minAllowed, $sourceProgress);
//                    break;
//
//                case 'FF': // Finish → Finish
//                    // پیشرفت تسک بعدی نباید از پیشرفت پایانی تسک قبل جلو بزند
//                    $minAllowed = min($minAllowed, $sourceProgress);
//                    break;
//
//                case 'SF': // Start → Finish
//                    // پیشرفت پایان B وابسته به شروع A
//                    if ($sourceProgress < 10) {
//                        $minAllowed = min($minAllowed, 10);
//                    }
//                    break;
//            }
//        }
//
//        return max(0, min(100, $minAllowed));
//    }
//    public function getProgressEffectiveAttribute()
//    {
//        $actual = $this->progress ?? 0;
//        $allowed = $this->calculateAllowedProgress();
//
//        return min($actual, $allowed);
//    }
//
//    public function getProgressTreeAttribute()
//    {
//        if ($this->children->count() === 0) {
//            return $this->progress_effective;
//        }
//
//        $total = 0;
//        $count = 0;
//
//        foreach ($this->children as $child) {
//            $total += $child->progress_tree;
//            $count++;
//        }
//
//        return round($total / max(1, $count), 2);
//    }
//
//


}
