<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Project::class);
    }

    public function category_projects()
    {
        return $this->belongsToMany(Project::class,'project_category');
    }
    public function sumcat()
    {
        return $this->hasOne(Category::class , 'id' , 'parent_id');
    }
    public function getChid()
    {
        return $this->hasMany(Category::class , 'parent_id');
    }
}
