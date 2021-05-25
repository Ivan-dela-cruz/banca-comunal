<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountClient extends Model
{
    use HasFactory;
    protected $table = 'account_clients';
    protected $fillable = [
        'member_id',
        'code',
        'number',
        'sec',
        'type',
        'data1',
        'data2',
        'data3',
        'data4',
        'value1',
        'value2',
        'value3',
        'value4',
        'status'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');

    }

}
