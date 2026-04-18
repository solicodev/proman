<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ProjectApprove extends Model
{
    use LogsActivity,HasFactory;

    protected $fillable = ['title','description','photo_id','project_id','date'];

    protected static $logName = 'project Approved';

    protected static $logAttributes = ['title','description','photo_id','project_id','date'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "project Approved has been {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('project Approved')
            ->logOnly(['title','description','photo_id','project_id','date'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "project Approved has been {$eventName}");
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class,'photo_id');
    }
}
