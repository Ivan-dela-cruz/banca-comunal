<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credits extends Model
{
    use HasFactory;
    protected $table ='credits';
    protected $fillable = [
        'member_id',
        'visit_id',
        'request_id',
        'amortization_id',
        'term',
        'first_pay',
        'amount',
        'fixed_free',
        'balance',
        'status'
    ];
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');

    }
    public function visit()
    {
        return $this->belongsTo(AdvisorVisit::class, 'visit_id');

    }
    public function request_credit()
    {
        return $this->belongsTo(CreditRequest::class, 'request_id');

    }
}
