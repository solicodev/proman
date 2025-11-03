<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['parent_id','user_id','name','email','mobile','text','status'];

    public $en_status =[
        '0' => 'new',
        '1' => 'accepted',
        '2' => 'rejected',
    ];

    public $statuses = [
        '0' => '<span class="badge bg-info text-black">جدید</span>',
        '1' => '<span class="badge bg-success text-black">تایید شد</span>',
        '2' => '<span class="badge bg-danger text-black">رد شد</span>',
    ];

    public function getCommentStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function parent()
    {
        return $this->hasOne(Comment::class,'id','parent_id');
    }

    public function children()
    {
        return $this->hasMany(Comment::class,'parent_id','id');
    }
}
