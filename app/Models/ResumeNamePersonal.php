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

    public function experiences()
    {
        return $this->hasMany(ResumeNameExperience::class, 'resume_name_personal_id');
    }

    public function educations()
    {
        return $this->hasMany(ResumeNameEducation::class, 'resume_name_personal_id');
    }

    public function skills()
    {
        return $this->hasMany(ResumeNameSkill::class, 'resume_name_personal_id');
    }

    public function certifications()
    {
        return $this->hasMany(ResumeNameCertification::class, 'resume_name_personal_id');
    }

    public function projects()
    {
        return $this->hasMany(ResumeNameProject::class, 'resume_name_personal_id');
    }
}
