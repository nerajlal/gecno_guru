<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeNamePersonal extends Model
{
    use HasFactory;

    protected $table = 'resume_name_personals';

    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone',
        'address',
        'summary',
        'interested_areas',
    ];
}
