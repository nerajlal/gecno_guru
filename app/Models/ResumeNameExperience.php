<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeNameExperience extends Model
{
    use HasFactory;

    protected $table = 'resume_name_experiences';

    protected $fillable = [
        'resume_name_personal_id',
        'job_title',
        'company',
        'start_date',
        'end_date',
        'responsibilities',
    ];
}
