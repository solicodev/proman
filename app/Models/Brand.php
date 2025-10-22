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
}
