<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amortization extends Model
{
    use HasFactory;

    protected $table = 'amortizations';
    protected $fillable = [
        'member_id',
        'amount',
        'interest_rate',
        'term',
        'fixed_free',
        'period',
        'credit_type',
        'settlement_date',
        'due_date',
    ];

    public function details(){
        return $this->hasMany(DetailAmortization::class,'amortization_id');
    }

}
