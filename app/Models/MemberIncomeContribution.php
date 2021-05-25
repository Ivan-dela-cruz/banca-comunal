<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberIncomeContribution extends Model
{
    use HasFactory;
    protected $table ='member_income_contributions';
    protected $fillable = [
        'member_id',
        'date',
        'amount',
        'balance',
        'description',
        'status'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');

    }

}
