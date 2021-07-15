<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //relaciones
    public function canton(){
        return $this->hasMany(Canton::class);
        //una parroquia pertenece a un canton
    }
}
