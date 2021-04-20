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
        'name',
        'last_name',
        'dni',
        'passport',
        'instruction',
        'marital_status',
        'birth_date',
        'email',
        'phone1',
        'phone2',
        'member_type',
        'acount_number',
        'status'
    ];

    public function detail()
    {
        return $this->hasOne(DetailMember::class, 'member_id');

    }

    public function references(){
        return $this->hasMany(MemberReference::class, 'member_id');
    }
}
