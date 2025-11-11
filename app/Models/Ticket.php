<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','department_id','subject','priority','status'];

    protected $guarded = ['id', 'created_at', 'updated_at'];
    public $priorities = [
        'low' => '<span class="badge text-success fs-7 fw-bold">کم</span>',
        'medium' => '<span class="badge text-warning fs-7 fw-bold">متوسط</span>',
        'high' => '<span class="badge text-danger fs-7 fw-bold">زیاد</span>',
    ];
    public $statuses = [
        'new' => '<span class="badge badge-light-danger fs-7 fw-bold">جدید</span>',
        'pending' => '<span class="badge badge-light-warning fs-7 fw-bold">در حال بررسی</span>',
        'answered' => '<span class="badge badge-light-primary fs-7 fw-bold">پاسخ داده شده</span>',
        'waiting' => '<span class="badge badge-light-danger fs-7 fw-bold">منتظر پاسخ</span>',
        'closed' => '<span class="badge badge-light-success fs-7 fw-bold">بسته شده</span>',
    ];
    public function getHtmlPriorityAttribute()
    {
        return $this->priorities[$this->priority] ?? '';
    }

    public function getHtmlStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function department()
    {
        return $this->belongsTo(TicketDepartment::class, 'department_id');
    }

    public function messages() {
        return $this->hasMany(TicketMessage::class, 'ticket_id', 'id')->latest();
    }

}
