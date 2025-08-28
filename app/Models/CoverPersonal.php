<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverPersonal extends Model
{
    use HasFactory;

    protected $table = 'cover_personals';

    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone',
        'address',
        'letter_date',
        'closing_phrase',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recipientDetail()
    {
        return $this->hasOne(CoverRecipientDetail::class);
    }

    public function letterBodies()
    {
        return $this->hasMany(CoverLetterBody::class)->orderBy('paragraph_order');
    }
}
