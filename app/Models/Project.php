<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $status_english =[
        '0' => 'pending' ,
        '1' => 'in_progress' ,
        '2' => 'completed' ,
        '3' => 'on_hold' ,
        '4' => 'canceled' ,
    ];

    public $statuses = [
        '0' => '<span class="badge bg-warning text-black">در حال بررسی</span>',
        '1' => '<span class="badge bg-primary text-black">درحال انجام</span>',
        '2' => '<span class="badge bg-success text-black">تکمیل شد</span>',
        '3' => '<span class="badge bg-secondary text-black">تعلیق شد</span>',
        '4' => '<span class="badge bg-danger text-black">کنسل شد</span>',
    ];

    public function getProjectStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
    }

    public function manager()
    {
        return $this->belongsTo(User::class , 'manager_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
