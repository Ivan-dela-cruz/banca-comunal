<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'province_id'
    ];

    //relaciones
    public function province(){
        return $this->belongsTo(Province::class);
        //un canton pertenece a una provincia
    }
    public function parish(){
        return $this->hasMany(Parish::class);
        //una parroquia pertenece a un canton
    }
}
