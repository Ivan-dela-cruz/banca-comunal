<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAmortization extends Model
{
    use HasFactory;

    protected $table = 'detail_amortizations';
    protected $fillable = [
        'amortization_id',
        'period',
        'payment_date',
        'amount',
        'interest',
        'dividing',
        'total_payment',
        'balance',
    ];
}
