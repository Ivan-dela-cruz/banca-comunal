<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteBook extends Model
{
    use HasFactory;
    protected $table="note_books";
    protected $fillable = [
    'title',
    'subtitle',
    'image',
    'info1',
    'info2',
    'info3',
    'number',
    'sec',
    'cod',
    'account_num',
    'member_id'
    ];
}
