<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ConfigTable;
class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConfigTable::create(['identifier'=>'solicitudes','serie'=>'RC001','complemenet'=>1000000,'secuence'=>0]);
        ConfigTable::create(['identifier'=>'visitas','serie'=>'RV001','complemenet'=>1000000,'secuence'=>0]);
        ConfigTable::create(['identifier'=>'credito','serie'=>'CR001','complemenet'=>1000000,'secuence'=>0]);
        ConfigTable::create(['identifier'=>'cliente','serie'=>'0545223','complemenet'=>1000000,'secuence'=>0]);
        ConfigTable::create(['identifier'=>'socio','serie'=>'0545222','complemenet'=>1000000,'secuence'=>0]);
        ConfigTable::create(['identifier'=>'socio fundador','serie'=>'0545221','complemenet'=>1000000,'secuence'=>0]);
    }
}
