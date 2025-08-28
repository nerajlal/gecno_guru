<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeNameSkill extends Model
{
    use HasFactory;

    protected $table = 'resume_name_skills';

    protected $fillable = [
        'resume_name_personal_id',
        'skill_category',
        'skills',
    ];
}
