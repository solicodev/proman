<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ImplementeUnit extends Model
{
    use LogsActivity;
    protected $fillable = ['name','parent_id'];
    protected static $logName = 'implementeUnit';

    protected static $logAttributes = ['name','parent_id','created_at','updated_at'];

    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "implementeUnit has been {$eventName}";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('implementeUnit')
            ->logOnly(['name','parent_id','created_at','updated_at'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "implementeUnit has been {$eventName}");
    }
}
