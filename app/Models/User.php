<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable , HasRoles , SoftDeletes , LogsActivity;
    protected $guarded = [];
    protected static $logName = 'User';

    protected static $logAttributes = ['daily_capacity_hours','first_name','last_name','mobile','confirm_code','personal_id','status','position_id','photo_id','email','created_at','updated_at','deleted_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "user {$eventName}";
    }

    protected $appends = ['Name', 'UserStatus'];
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'email',
        'password',
        'position_id',
        'department_id',
        'last_name',
        'mobile',
        'personal_id',
        'status',
        'daily_capacity_hours',
        'confirm_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public $statuses = [
        '0' => '<span class="badge bg-warning text-black">غیرفعال</span>',
        '1' => '<span class="badge bg-success text-black">فعال</span>',
        '2' => '<span class="badge bg-danger text-black">تعلیق</span>',
    ];

    public function getUserStatusAttribute()
    {
        return $this->statuses[$this->status] ?? '';
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class,'photo_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('User')
            ->logOnly(['daily_capacity_hours','first_name','last_name','mobile','confirm_code','personal_id','status','position_id','photo_id','email','created_at','updated_at','deleted_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "user {$eventName}");
    }

    public function position()
    {
        return $this->belongsTo(Position::class,'position_id','id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class , 'department_id');
    }
}
