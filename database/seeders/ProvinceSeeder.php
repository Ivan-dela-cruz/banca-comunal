<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'name' => 'AZUAY', //1
        ]);
        Province::create([
            'name' => 'BOLÍVAR', //2
        ]);
        Province::create([
            'name' => 'CAÑAR', //3
        ]);
        Province::create([
            'name' => 'CARCHI', //4
        ]);
        Province::create([
            'name' => 'COTOPAXI', //5
        ]);
        Province::create([
            'name' => 'CHIMBORAZO ', //6
        ]);
        Province::create([
            'name' => 'EL ORO', //7
        ]);
        Province::create([
            'name' => 'ESMERALDAS', //8
        ]);
        Province::create([
            'name' => 'GUAYAS', //9
        ]);
        Province::create([
            'name' => 'IMBABURA', //10
        ]);
        Province::create([
            'name' => 'LOJA', //11
        ]);
        Province::create([
            'name' => 'LOS RIOS', //12
        ]);
        Province::create([
            'name' => 'MANABI', //13
        ]);
        Province::create([
            'name' => 'MORONA SANTIAGO', //14
        ]);
        Province::create([
            'name' => 'NAPO', //15
        ]);
        Province::create([
            'name' => 'PASTAZA', //16
        ]);
        Province::create([
            'name' => 'PICHINCHA', //17
        ]);
        Province::create([
            'name' => 'TUNGURAHUA', //18
        ]);
        Province::create([
            'name' => 'ZAMORA CHINCHIPE', //19
        ]);
        Province::create([
            'name' => 'GALAPAGOS', //20
        ]);
        Province::create([
            'name' => 'SUCUMBIOS', //21
        ]);
        Province::create([
            'name' => 'ORELLANA', //22
        ]);
        Province::create([
            'name' => 'SANTO DOMINGO DE LOS TSACHILAS', //23
        ]);
        Province::create([
            'name' => 'SANTA ELENA', //24
        ]);
    }
}
