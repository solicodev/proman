<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name','parent_id','photo_id'];

    public function photo()
    {
        return $this->belongsTo(Photo::class,'photo_id');
    }
    public function department()
    {
        return $this->belongsToMany(Department::class,'department_brand' , 'department_id' , 'brand_id');
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
