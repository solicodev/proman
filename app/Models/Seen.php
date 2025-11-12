<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seen extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function seenable()
    {
        return $this->morphTo();
    }
}
