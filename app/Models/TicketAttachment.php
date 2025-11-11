<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketAttachment extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_message_id','path'];
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function tocketMessage()
    {
        return $this->belongsTo(TicketMessage::class, 'ticket_message_id');
    }

}
