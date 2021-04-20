<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberReference extends Model
{
    use HasFactory;
    //use SoftDeletes;

    protected $table = 'member_references';

    protected $fillable = [
        'member_id',
        'name',
        'last_name',
        'dni',
        'relationship',
        'instruction',
        'time_to_meet',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');

    }
}
