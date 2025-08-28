<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeNameProject extends Model
{
    use HasFactory;

    protected $table = 'resume_name_projects';

    protected $fillable = [
        'resume_name_personal_id',
        'project_name',
        'project_key_points',
        'technologies',
        'tools',
    ];
}
