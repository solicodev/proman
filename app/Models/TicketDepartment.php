<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketDepartment extends Model
{
    use HasFactory;

    protected $fillable = ['title','status'];
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public $statuses = [
        'active' => '<span class="badge badge-light-success fs-7 fw-bold">فعال</span>',
        'inactive' => '<span class="badge badge-light-warning fs-7 fw-bold">غیرفعال</span>',
    ];
    public function getHtmlStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
    }

}
