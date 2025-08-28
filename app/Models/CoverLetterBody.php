<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverLetterBody extends Model
{
    use HasFactory;

    protected $table = 'cover_letter_bodies';

    protected $fillable = [
        'cover_personal_id',
        'paragraph_text',
        'paragraph_order',
    ];

    public function coverPersonal()
    {
        return $this->belongsTo(CoverPersonal::class);
    }
}
