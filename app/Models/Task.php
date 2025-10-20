<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','description','status','priority','parent_id','start_date','end_date','project_id','manager_id','duration'];

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
}
