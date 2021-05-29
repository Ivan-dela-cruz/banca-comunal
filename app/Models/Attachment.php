<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $table = 'attachments';
    protected $fillable = [
        'name_doc',
        'description_doc',
        'url_doc',
        'status'
    ];

    public function attachmentable(){
        return $this->morphTo();
    }
}
