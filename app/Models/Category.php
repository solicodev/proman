<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'parent_id'];


    public function sumcat()
    {
        return $this->hasOne(Category::class , 'id' , 'parent_id');
    }
    public function getChid()
    {
        return $this->hasMany(Category::class , 'parent_id');
    }
}
