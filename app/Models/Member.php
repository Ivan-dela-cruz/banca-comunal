<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Member extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'members';
    protected $fillable = [
        'doc_type',
        'doc_number',
        'name',
        'last_name',
        'instruction',
        'birth_place',
        'country',
        'birth_date',
        'marital_status',
        'gender',
        'email',
        'phone1',
        'phone2',
        'residence_address',
        'member_type',
        'account_number',
        'status', 
        'url_image',
    ];

    public function detail()
    {
        return $this->hasOne(DetailMember::class, 'member_id');

    }

    public function references(){
        return $this->hasMany(MemberReference::class, 'member_id');
    }
    public function account()
    {
        return $this->hasOne(AccountClient::class, 'member_id');

    }
    public function creditRequests()
    {
        return $this->hasMany(CreditRequest::class, 'member_id');

    }
    public function visits()
    {
        return $this->hasMany(AdvisorVisit::class, 'member_id');

    }
    public function incomes_contribution()
    {
        return $this->hasMany(MemberIncomeContribution::class, 'member_id');

    }
}
