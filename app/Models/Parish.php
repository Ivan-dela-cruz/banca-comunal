<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'canton_id'
    ];

    //relaciones
    public function canton(){
        return $this->belongsTo(Canton::class);
        //una parroquia pertenece a un canton
    }
}
