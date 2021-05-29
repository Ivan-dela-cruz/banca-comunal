<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = [
        'member_id',
        'account_id',
        'date',
        'description',
        'amount',
        "amount_letters",
        "place",
        'type_partner',
        'deposit',
        'retreats',
        'balance',
        'type_currency',
        'status',
    ];

    public function member (){
        return $this->belongsTo(Member::class,'member_id');
    }
}
