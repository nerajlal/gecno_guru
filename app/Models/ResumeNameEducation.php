<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeNameEducation extends Model
{
    use HasFactory;

    protected $table = 'resume_name_educations';

    protected $fillable = [
        'resume_name_personal_id',
        'school',
        'degree',
    ];
}
