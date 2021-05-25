<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorVisit extends Model
{
    use HasFactory;


    protected $table = 'advisor_visits';
    protected $fillable = [
        //step1
        'member_id',
        'code',
        'credit_type',
        'name_debtor',
        'dni_debtor',
        'amount',
        'reason_invest',
        'pay',
        'deadline',
        'variable_fee',
        'credit_segment',
        //step2
        //step3
        //step4
        'business_name',
        'ruc',
        'business_age',
        'sales_place',
        'local_type',
        'business_time',
        'business_address',
        'streets',
        'number',
        'business_reference',


        //step 7
        'living_place_lat',
        'living_place_lng',
        'commerce_lat',
        'commerce_lng',
        'url_living',
        'url_commerce',
        'status'
    ];
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');

    }
}
