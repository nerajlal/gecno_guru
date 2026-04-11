<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cost_inr',
        'description',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
