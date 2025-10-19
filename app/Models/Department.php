<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['title', 'parent_id'];

    public function sumcat()
    {
        return $this->hasOne(Department::class , 'id' , 'parent_id');
    }
    public function getChid()
    {
        return $this->hasMany(Department::class , 'parent_id');
    }
}
