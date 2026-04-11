<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverRecipientDetail extends Model
{
    use HasFactory;

    protected $table = 'cover_recipient_details';

    protected $fillable = [
        'cover_personal_id',
        'hiring_manager_name',
        'hiring_manager_title',
        'company_name',
        'company_address',
    ];

    public function coverPersonal()
    {
        return $this->belongsTo(CoverPersonal::class);
    }
}
