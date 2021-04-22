<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DetailMember extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'detail_members';
    protected $fillable = [
        'member_id',

        'name_spouse',
        'last_name_spouse',
        'dni_spouse',
        'passport_spouse',
        'birth_date_spouse',
        'email_spouse',
        'phone1_spouse',
        'phone2_spouse',
        'economic_activity',
        'contract_type',
        'company_name',
        'company_address',
        'company_phone',
        'service_time',
        'profession_spouse',
        'actual_charge_spouse',
        'income_spouse',

        'city',
        'canton',
        'parish',
        'principal_street',
        'secundary_street',
        'reference_place',
        'name_reference',
        'last_name_reference',
        'dni_reference',
        'relationship',
        'time_to_meet',
        'instruction_reference'
    ];
    public function member()
    {
        return $this->hasOne(Member::class, 'member_id');

    }
}
