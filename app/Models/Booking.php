<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'session_type_id',
        'booking_date',
        'booking_time',
        'status',
        'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sessionType()
    {
        return $this->belongsTo(SessionType::class);
    }
}
