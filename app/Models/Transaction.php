<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'resume_transactions';

    protected $fillable = [
        'user_id',
        'merchant_order_id',
        'phonepe_transaction_id',
        'amount',
        'status',
    ];
}
