<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $fillable = ['project_code', 'name' , 'start_date' , 'end_date' , 'status' , 'manager_id' , 'category_id' , 'department_id' , 'start_todo_date'];


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

    public $panelstatuses = [
        '0' => '<span class="badge badge-light-danger fw-bold me-auto px-4 py-3">درحال بررسی</span>',
        '1' => '<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">درحال انجام</span>',
        '2' => '<span class="badge badge-success fw-bold me-auto px-4 py-3"> تکمیل شد</span>',
        '3' => '<span class="badge badge-light-secondary fw-bold me-auto px-4 py-3">تعلیق شد</span>',
        '4' => '<span class="badge badge-light fw-bold me-auto px-4 py-3">کنسل شد</span>',
    ];


    public function getPanelProjectStatusAttribute()
    {
        return $this->panelstatuses[$this->status] ?? '';
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

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class , 'project_user' , 'project_id' , 'user_id');
    }
    public function photos()
    {
        return $this->belongsToMany(Photo::class , 'project_photo' , 'project_id' , 'photo_id');
    }

    public function dependencies() // project dependency for PR->PO->GR
    {
        return $this->morphMany(ProjectDependency::class, 'project_dependencies');
    }
}
