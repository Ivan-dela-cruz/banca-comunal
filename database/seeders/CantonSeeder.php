<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Canton;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        #region  AZUAY
        Canton::create([
            'name' => 'CUENCA ', //AZUAY
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'GIRON',
            'province_id' =>1,
        ]);
        Canton::create([
            'name' => 'GUALACEO',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'NABÓN',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'PAUTE',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'PUCARA',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'SAN FERNANDO',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'SANTA ISABEL',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'SIGSIG',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'OÑA',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'CHORDELEG',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'EL PAN',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'SEVILLA DE ORO',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'GUACHAPALA',
            'province_id' => 1,
        ]);
        Canton::create([
            'name' => 'CAMILO PONCE ENRÍQUEZ',
            'province_id' => 1,
        ]);
        #endregion

        #region  BOLIVAR
        Canton::create([
            'name' => 'GUARANDA', //BOLIVAR
            'province_id' => 2,
        ]);
        Canton::create([
            'name' => 'CHILLANES',
            'province_id' => 2,
        ]);
        Canton::create([
            'name' => 'CHIMBO',
            'province_id' => 2,
        ]);
        Canton::create([
            'name' => 'ECHEANDÍA',
            'province_id' => 2,
        ]);
        Canton::create([
            'name' => 'SAN MIGUEL',
            'province_id' => 2,
        ]);
        Canton::create([
            'name' => 'CALUMA',
            'province_id' => 2,
        ]);
        Canton::create([
            'name' => 'LAS NAVES',
            'province_id' => 2,
        ]);
        #endregion

        #region  CAÑAR
        Canton::create([
            'name' => 'AZOGUES', //CAÑAR
            'province_id' => 3,
        ]);
        Canton::create([
            'name' => 'BIBLIÁN',
            'province_id' => 3,
        ]);
        Canton::create([
            'name' => 'CAÑAR',
            'province_id' => 3,
        ]);
        Canton::create([
            'name' => 'LA TRONCAL',
            'province_id' => 3,
        ]);
        Canton::create([
            'name' => 'EL TAMBO',
            'province_id' => 3,
        ]);
        Canton::create([
            'name' => 'DÉLEG',
            'province_id' => 3,
        ]);
        Canton::create([
            'name' => 'SUSCAL',
            'province_id' => 3,
        ]);
        #endregion

        #region  CARCHI
        Canton::create([
            'name' => 'TULCÁN ', //CARCHI
            'province_id' => 4,
        ]);
        Canton::create([
            'name' => 'BOLÍVAR',
            'province_id' => 4,
        ]);
        Canton::create([
            'name' => 'ESPEJO',
            'province_id' => 4,
        ]);
        Canton::create([
            'name' => 'MIRA',
            'province_id' => 4,
        ]);
        Canton::create([
            'name' => 'MONTÚFAR',
            'province_id' => 4
        ]);
        Canton::create([
            'name' => 'SAN PEDRO DE HUACA',
            'province_id' => 4,
        ]);
        #endregion

        #region  COTOPAXI
        Canton::create([
            'name' => 'LATACUNGA', //COTOPAXI
            'province_id' => 5,
        ]);
        Canton::create([
            'name' => 'LA MANÁ',
            'province_id' => 5,
        ]);
        Canton::create([
            'name' => 'PANGUA',
            'province_id' => 5,
        ]);
        Canton::create([
            'name' => 'PUJILI',
            'province_id' => 5,
        ]);
        Canton::create([
            'name' => 'SALCEDO',
            'province_id' => 5,
        ]);
        Canton::create([
            'name' => 'SAQUISILÍ',
            'province_id' => 5,
        ]);
        Canton::create([
            'name' => 'SIGCHOS',
            'province_id' => 5,
        ]);
        #endregion

        #region CHIMBORAZO
        Canton::create([
            'name' => 'RIOBAMBA', //CHIMBORAZO
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'ALAUSI',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'COLTA',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'CHAMBO',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'CHUNCHI',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'GUAMOTE',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'GUANO',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'PALLATANGA',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'PENIPE',
            'province_id' => 6,
        ]);
        Canton::create([
            'name' => 'CUMANDÁ',
            'province_id' => 6,
        ]);
        #endregion

        #region EL ORO
        Canton::create([
            'name' => 'MACHALA', // EL ORO
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'ARENILLAS',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'ATAHUALPA',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'BALSAS',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'CHILLA',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'EL GUABO',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'HUAQUILLAS',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'MARCABELÍ',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'PASAJE',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'PIÑAS',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'PORTOVELO',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'SANTA ROSA',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'ZARUMA',
            'province_id' => 7,
        ]);
        Canton::create([
            'name' => 'LAS LAJAS',
            'province_id' => 7,
        ]);
        #endregion

        #region ESMERALDAS
        Canton::create([
            'name' => 'ESMERALDAS', // ESMERALDAS
            'province_id' => 8,
        ]);
        Canton::create([
            'name' => 'ELOY ALFARO',
            'province_id' => 8,
        ]);
        Canton::create([
            'name' => 'MUISNE',
            'province_id' => 8,
        ]);
        Canton::create([
            'name' => 'QUININDE',
            'province_id' => 8,
        ]);
        Canton::create([
            'name' => 'SAN LORENZO',
            'province_id' => 8,
        ]);
        Canton::create([
            'name' => 'ATACAMES',
            'province_id' => 8,
        ]);
        Canton::create([
            'name' => 'RIOVERDE',
            'province_id' => 8,
        ]);
        Canton::create([
            'name' => 'LA CONCORDIA',
            'province_id' => 8,
        ]);
        #endregion

        #region GUAYAS
        Canton::create([
            'name' => 'GUAYAQUIL', //GUAYAS
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'BALAO',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'BALZAR',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'COLIMES',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'DAULE',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'DURÁN',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'EL EMPALME',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'EL TRIUNFO',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'MILAGRO',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'NARANJAL',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'NARANJITO',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'PALESTINA',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'PEDRO CARBO',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'SAMBORONDÓN',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'SANTA LUCÍA',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'SALITRE (URBINA JADO)',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'SAN JACINTO DE YAGUACHI',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'PLAYAS',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'SIMÓN BOLÍVAR',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'CORONEL MARCELINO MARIDUEÑA',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'LOMAS DE SARGENTILLO',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'NOBOL',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'GENERAL ANTONIO ELIZALDE',
            'province_id' => 9,
        ]);
        Canton::create([
            'name' => 'ISIDRO AYORA',
            'province_id' => 9,
        ]);
        #endregion

        #region IMBABURA
        Canton::create([
            'name' => 'IBARRA', //IMBABURA
            'province_id' => 10,
        ]);
        Canton::create([
            'name' => 'ANTONIO ANTE',
            'province_id' => 10,
        ]);
        Canton::create([
            'name' => 'COTACACHI',
            'province_id' => 10,
        ]);
        Canton::create([
            'name' => 'OTAVALO',
            'province_id' => 10,
        ]);
        Canton::create([
            'name' => 'PIMAMPIRO',
            'province_id' => 10,
        ]);
        Canton::create([
            'name' => 'SAN MIGUEL DE URCUQUÍ',
            'province_id' => 10,
        ]);
        #endregion

        #region LOJA
        Canton::create([
            'name' => 'LOJA', //LOJA
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'CALVAS',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'CATAMAYO',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'CELICA',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'CHAGUARPAMBA',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'ESPÍNDOLA',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'GONZANAMÁ',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'MACARÁ',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'PALTAS',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'PUYANGO',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'SARAGURO',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'SOZORANGA',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'ZAPOTILLO',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'PINDAL',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'QUILANGA',
            'province_id' => 11,
        ]);
        Canton::create([
            'name' => 'OLMEDO',
            'province_id' => 11,
        ]);
        #endregion

        #region LOS RIOS
        Canton::create([
            'name' => 'BABAHOYO', //LOS RIOS
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'BABA',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'MONTALVO',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'PUEBLOVIEJO',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'QUEVEDO',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'URDANETA',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'VENTANAS',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'VÍNCES',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'PALENQUE',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'BUENA FÉ',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'VALENCIA',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'MOCACHE',
            'province_id' => 12,
        ]);
        Canton::create([
            'name' => 'QUINSALOMA',
            'province_id' => 12,
        ]);
        #endregion

        #region MANABI
        Canton::create([
            'name' => 'PORTOVIEJO', //MANABI
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'BOLÍVAR',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'CHONE',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'EL CARMEN',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'FLAVIO ALFARO',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'JIPIJAPA',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'JUNÍN',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'MANTA',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'MONTECRISTI',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'PAJÁN',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'PICHINCHA',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'ROCAFUERTE',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'SANTA ANA',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'SUCRE',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'TOSAGUA',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => '24 DE MAYO',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'PEDERNALES',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'OLMEDO',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'PUERTO LÓPEZ',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'JAMA',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'JARAMIJÓ',
            'province_id' => 13,
        ]);
        Canton::create([
            'name' => 'SAN VICENTE',
            'province_id' => 13,
        ]);
        #endregion

        #region MORONA SANTIAGO
        Canton::create([
            'name' => 'MORONA', // MORONA SANTIAGO
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'GUALAQUIZA',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'LIMÓN INDANZA',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'SANTIAGO',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'SUCÚA',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'HUAMBOYA',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'SAN JUAN BOSCO',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'TAISHA',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'LOGROÑO',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'PABLO SEXTO',
            'province_id' => 14,
        ]);
        Canton::create([
            'name' => 'TIWINTZA',
            'province_id' => 14,
        ]);
        #endregion

        #region NAPO
        Canton::create([
            'name' => 'TENA', // NAPO
            'province_id' => 15,
        ]);
        Canton::create([
            'name' => 'ARCHIDONA',
            'province_id' => 15,
        ]);
        Canton::create([
            'name' => 'EL CHACO',
            'province_id' => 15,
        ]);
        Canton::create([
            'name' => 'QUIJOS',
            'province_id' => 15,
        ]);
        Canton::create([
            'name' => 'CARLOS JULIO AROSEMENA TOLA',
            'province_id' => 15,
        ]);
        #endregion

        #region PASTAZA
        Canton::create([
            'name' => 'PASTAZA', // PASTAZA
            'province_id' => 16,
        ]);
        Canton::create([
            'name' => 'MERA', //
            'province_id' => 16,
        ]);
        Canton::create([
            'name' => 'SANTA CLARA', //
            'province_id' => 16,
        ]);
        Canton::create([
            'name' => 'ARAJUNO', //
            'province_id' => 16,
        ]);
        #endregion

        #region PICHINCHA
        Canton::create([
            'name' => 'QUITO', // PICHINCHA
            'province_id' => 17,
        ]);
        Canton::create([
            'name' => 'CAYAMBE',
            'province_id' => 17,
        ]);
        Canton::create([
            'name' => 'MEJIA',
            'province_id' => 17,
        ]);
        Canton::create([
            'name' => 'PEDRO MONCAYO',
            'province_id' => 17,
        ]);
        Canton::create([
            'name' => 'RUMIÑAHUI',
            'province_id' => 17,
        ]);
        Canton::create([
            'name' => 'SAN MIGUEL DE LOS BANCOS',
            'province_id' => 17,
        ]);
        Canton::create([
            'name' => 'PEDRO VICENTE MALDONADO',
            'province_id' => 17,
        ]);
        Canton::create([
            'name' => 'PUERTO QUITO',
            'province_id' => 17,
        ]);
        #endregion

        #region TUNGURAHUA
        Canton::create([
            'name' => 'AMBATO', // TUNGURAHUA
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'BAÑOS DE AGUA SANTA',
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'CEVALLOS',
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'MOCHA',
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'PATATE',
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'QUERO',
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'SAN PEDRO DE PELILEO',
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'SANTIAGO DE PÍLLARO',
            'province_id' => 18,
        ]);
        Canton::create([
            'name' => 'TISALEO',
            'province_id' => 18,
        ]);
        #endregion

        #region ZAMORA CHINCHIPE
        Canton::create([
            'name' => 'ZAMORA', // ZAMORA CHINCHIPE
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'CHINCHIPE',
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'NANGARITZA',
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'YACUAMBI',
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'YANTZAZA (YANZATZA)',
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'EL PANGUI',
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'CENTINELA DEL CÓNDOR',
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'PALANDA',
            'province_id' => 19,
        ]);
        Canton::create([
            'name' => 'PAQUISHA',
            'province_id' => 19,
        ]);
        #endregion

        #region GALAPAGOS
        Canton::create([
            'name' => 'SAN CRISTÓBAL', // GALAPAGOS
            'province_id' => 20,
        ]);
        Canton::create([
            'name' => 'ISABELA',
            'province_id' => 20,
        ]);
        Canton::create([
            'name' => 'SANTA CRUZ',
            'province_id' => 20,
        ]);
        #endregion

        #region SUCUMBIOS
        Canton::create([
            'name' => 'LAGO AGRIO', //SUCUMBIOS
            'province_id' => 21,
        ]);
        Canton::create([
            'name' => 'GONZALO PIZARRO',
            'province_id' => 21,
        ]);
        Canton::create([
            'name' => 'PUTUMAYO',
            'province_id' => 21,
        ]);
        Canton::create([
            'name' => 'SHUSHUFINDI',
            'province_id' => 21,
        ]);
        Canton::create([
            'name' => 'SUCUMBÍOS',
            'province_id' => 21,
        ]);
        Canton::create([
            'name' => 'CASCALES',
            'province_id' => 21,
        ]);
        Canton::create([
            'name' => 'CUYABENO',
            'province_id' => 21,
        ]);
        #endregion

        #region ORELLANA
        Canton::create([
            'name' => 'ORELLANA', // ORELLANA
            'province_id' => 22,
        ]);
        Canton::create([
            'name' => 'AGUARICO',
            'province_id' => 22,
        ]);
        Canton::create([
            'name' => 'LA JOYA DE LOS SACHAS',
            'province_id' => 22,
        ]);
        Canton::create([
            'name' => 'LORETO',
            'province_id' => 22,
        ]);
        #endregion

        #region SANTO DOMINGO DE LOS TSACHILAS
        Canton::create([
            'name' => 'SANTO DOMINGO', // SANTO DOMINGO DE LOS TSACHILAS
            'province_id' => 23,
        ]);
        #endregion

        #region SANTA ELENA
        Canton::create([
            'name' => 'SANTA ELENA', // SANTA ELENA
            'province_id' => 24,
        ]);
        Canton::create([
            'name' => 'LA LIBERTAD',
            'province_id' => 24,
        ]);
        Canton::create([
            'name' => 'SALINAS',
            'province_id' => 24,
        ]);
        #endregion
    }
}
