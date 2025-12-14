<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectManagerAdmin extends Model
{
    protected $fillable = ['project_manager_id','admin_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'project_manager_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class,'admin_id');
    }
}
