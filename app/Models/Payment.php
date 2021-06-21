<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table ='payments';
    protected $fillable = [
        'code',
        'amortization_id',
        'detail_amortization_id',
        'user_id',
        'member_id',
        'credit_id',
        'date_period',
        'date_pay',
        'total',
        'balance',
        'interest_mora',
        'num_pay',
        'customers_name',
        'account_number',
        'amount',
        'status_pay',
        'status'
    ];

}
