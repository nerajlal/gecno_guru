<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeNameCertification extends Model
{
    use HasFactory;

    protected $table = 'resume_name_certifications';

    protected $fillable = [
        'resume_name_personal_id',
        'certification_name',
        'issuing_organization',
    ];
}
