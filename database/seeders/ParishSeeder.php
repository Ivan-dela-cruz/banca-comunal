<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Parish;

class ParishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #region CUENCA
        Parish::create([
            'name' => 'BELLAVISTA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'CAÑARIBAMBA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'EL BATÁN',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'EL SAGRARIO',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'EL VECINO',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'GIL RAMÍREZ DÁVALOS',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'HUAYNACÁPAC',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'MACHÁNGARA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'MONAY',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SAN BLAS',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SAN SEBASTIÁN',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SUCRE',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'TOTORACOCHA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'YANUNCAY',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'HERMANO MIGUEL',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'CUENCA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'BAÑOS',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'CUMBE',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'CHAUCHA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'CHECA (JIDCAY)',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'CHIQUINTAD',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'LLACAO',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'MOLLETURO',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'NULTI',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'OCTAVIO CORDERO PALACIOS (SANTA ROSA)',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'PACCHA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'QUINGEO',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'RICAURTE',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SAN JOAQUÍN',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SANTA ANA',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SAYAUSÍ',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SIDCAY',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'SININCAY',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'TARQUI',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'TURI',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'VALLE',
            'canton_id' => 1,
        ]);
        Parish::create([
            'name' => 'VICTORIA DEL PORTETE (IRQUIS)',
            'canton_id' => 1,
        ]);
        #endregion

        #region GIRON
        Parish::create([
            'name' => 'GIRÓN',
            'canton_id' => 2,
        ]);
        Parish::create([
            'name' => 'ASUNCIÓN',
            'canton_id' => 2,
        ]);
        Parish::create([
            'name' => 'SAN GERARDO',
            'canton_id' => 2,
        ]);
        #endregion

        #region GUALACEO
        Parish::create([
            'name' => 'GUALACEO',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'CHORDELEG',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'DANIEL CÓRDOVA TORAL (EL ORIENTE)',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'JADÁN',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'MARIANO MORENO',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'PRINCIPAL',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'REMIGIO CRESPO TORAL (GÚLAG)',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'SAN JUAN',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'ZHIDMAD',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'LUIS CORDERO VEGA',
            'canton_id' => 3,
        ]);
        Parish::create([
            'name' => 'SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)',
            'canton_id' => 3,
        ]);
        #endregion

        #region NABÓN
        Parish::create([
            'name' => 'NABÓN',
            'canton_id' => 4,
        ]);
        Parish::create([
            'name' => 'COCHAPATA',
            'canton_id' => 4,
        ]);
        Parish::create([
            'name' => 'EL PROGRESO (CAB.EN ZHOTA)',
            'canton_id' => 4,
        ]);
        Parish::create([
            'name' => 'LAS NIEVES (CHAYA)',
            'canton_id' => 4,
        ]);
        Parish::create([
            'name' => 'OÑA',
            'canton_id' => 4,
        ]);
        #endregion

        #region PAUTE
        Parish::create([
            'name' => 'PAUTE',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'AMALUZA',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'BULÁN (JOSÉ VÍCTOR IZQUIERDO)',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'CHICÁN (GUILLERMO ORTEGA)',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'EL CABO',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'GUACHAPALA',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'GUARAINAG',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'PALMAS',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'PAN',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'SEVILLA DE ORO',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'TOMEBAMBA',
            'canton_id' => 5,
        ]);
        Parish::create([
            'name' => 'DUG DUG',
            'canton_id' => 5,
        ]);
        #endregion

        #region PUCARÁ
        Parish::create([
            'name' => 'PUCARÁ',
            'canton_id' => 6,
        ]);
        Parish::create([
            'name' => 'CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLEPONGO',
            'canton_id' => 6,
        ]);
        Parish::create([
            'name' => 'SAN RAFAEL DE SHARUG',
            'canton_id' => 6,
        ]);
        #endregion

        #region SAN FERNANDO
        Parish::create([
            'name' => 'SAN FERNANDO',
            'canton_id' => 7,
        ]);
        Parish::create([
            'name' => 'CHUMBLÍN',
            'canton_id' => 7,
        ]);
        #endregion

        #region SANTA ISABEL
        Parish::create([
            'name' => 'SANTA ISABEL (CHAGUARURCO)',
            'canton_id' => 8,
        ]);
        Parish::create([
            'name' => 'ABDÓN CALDERÓN (LA UNIÓN)',
            'canton_id' => 8,
        ]);
        Parish::create([
            'name' => 'EL CARMEN DE PIJILÍ',
            'canton_id' => 8,
        ]);
        Parish::create([
            'name' => 'ZHAGLLI (SHAGLLI)',
            'canton_id' => 8,
        ]);
        Parish::create([
            'name' => 'SAN SALVADOR DE CAÑARIBAMBA',
            'canton_id' => 8,
        ]);
        #endregion

        #region SIGSIG
        Parish::create([
            'name' => 'SIGSIG',
            'canton_id' => 9,
        ]);
        Parish::create([
            'name' => 'CUCHIL (CUTCHIL)',
            'canton_id' => 9,
        ]);
        Parish::create([
            'name' => 'GIMA',
            'canton_id' => 9,
        ]);
        Parish::create([
            'name' => 'GUEL',
            'canton_id' => 9,
        ]);
        Parish::create([
            'name' => 'LUDO',
            'canton_id' => 9,
        ]);
        Parish::create([
            'name' => 'SAN BARTOLOMÉ',
            'canton_id' => 9,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE RARANGA',
            'canton_id' => 9,
        ]);
        #endregion

        #region OÑA
        Parish::create([
            'name' => 'SAN FELIPE DE OÑA CABECERA CANTONAL',
            'canton_id' => 10,
        ]);
        Parish::create([
            'name' => 'SUSUDEL',
            'canton_id' => 10,
        ]);
        #endregion

        #region CHORDELEG
        Parish::create([
            'name' => 'CHORDELEG',
            'canton_id' => 11,
        ]);
        Parish::create([
            'name' => 'PRINCIPAL',
            'canton_id' => 11,
        ]);
        Parish::create([
            'name' => 'LA UNIÓN',
            'canton_id' => 11,
        ]);
        Parish::create([
            'name' => 'LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)',
            'canton_id' => 11,
        ]);
        Parish::create([
            'name' => 'SAN MARTÍN DE PUZHIO',
            'canton_id' => 11,
        ]);
        #endregion

        #region EL PAN
        Parish::create([
            'name' => 'EL PAN',
            'canton_id' => 12,
        ]);
        Parish::create([
            'name' => 'AMALUZA',
            'canton_id' => 12,
        ]);
        Parish::create([
            'name' => 'PALMAS',
            'canton_id' => 12,
        ]);
        Parish::create([
            'name' => 'SAN VICENTE',
            'canton_id' => 12,
        ]);
        #endregion

        #region SEVILLA DE ORO
        Parish::create([
            'name' => 'SEVILLA DE ORO',
            'canton_id' => 13,
        ]);
        Parish::create([
            'name' => 'AMALUZA',
            'canton_id' => 13,
        ]);
        Parish::create([
            'name' => 'PALMAS',
            'canton_id' => 13,
        ]);
        #endregion

        #region GUACHAPALA
        Parish::create([
            'name' => 'GUACHAPALA',
            'canton_id' => 14,
        ]);
        #endregion

        #region CAMILO PONCE ENRÍQUEZ
        Parish::create([
            'name' => 'CAMILO PONCE ENRÍQUEZ',
            'canton_id' => 15,
        ]);
        Parish::create([
            'name' => 'EL CARMEN DE PIJILÍ',
            'canton_id' => 15,
        ]);
        #endregion

        #region GUARANDA-BOLIVAR
        Parish::create([
            'name' => 'ÁNGEL POLIBIO CHÁVES',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'GABRIEL IGNACIO VEINTIMILLA',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'GUANUJO',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'GUARANDA',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'FACUNDO VELA',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'GUANUJO',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'JULIO E. MORENO (CATANAHUÁN GRANDE)',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'LAS NAVES',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'SALINAS',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'SAN LORENZO',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'SAN SIMÓN (YACOTO)',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'SANTA FÉ (SANTA FÉ)',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'SIMIÁTUG',
            'canton_id' => 16,
        ]);
        Parish::create([
            'name' => 'SAN LUIS DE PAMBIL',
            'canton_id' => 16,
        ]);
        #endregion

        #region CHILLANES
        Parish::create([
            'name' => 'CHILLANES ',
            'canton_id' => 17,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DEL TAMBO (TAMBOPAMBA)',
            'canton_id' => 17,
        ]);
        #endregion

        #region CHIMBO
        Parish::create([
            'name' => 'SAN JOSÉ DE CHIMBO',
            'canton_id' => 18,
        ]);
        Parish::create([
            'name' => 'ASUNCIÓN (ASANCOTO)',
            'canton_id' => 18,
        ]);
        Parish::create([
            'name' => 'CALUMA',
            'canton_id' => 18,
        ]);
        Parish::create([
            'name' => 'MAGDALENA (CHAPACOTO)',
            'canton_id' => 18,
        ]);
        Parish::create([
            'name' => 'SAN SEBASTIÁN',
            'canton_id' => 18,
        ]);
        Parish::create([
            'name' => 'TELIMBELA',
            'canton_id' => 18,
        ]);
        #endregion

        #region ECHEANDÍA
        Parish::create([
            'name' => 'ECHEANDÍA ',
            'canton_id' => 19,
        ]);
        #endregion

        #region SAN MIGUEL
        Parish::create([
            'name' => 'SAN MIGUEL',
            'canton_id' => 20,
        ]);
        Parish::create([
            'name' => 'BALSAPAMBA',
            'canton_id' => 20,
        ]);
        Parish::create([
            'name' => 'BILOVÁN',
            'canton_id' => 20,
        ]);
        Parish::create([
            'name' => 'RÉGULO DE MORA',
            'canton_id' => 20,
        ]);
        Parish::create([
            'name' => 'SAN PABLO (SAN PABLO DE ATENAS)',
            'canton_id' => 20,
        ]);
        Parish::create([
            'name' => 'SANTIAGO',
            'canton_id' => 20,
        ]);
        Parish::create([
            'name' => 'SAN VICENTE',
            'canton_id' => 20,
        ]);
        #endregion

        #region CALUMA
        Parish::create([
            'name' => 'CALUMA',
            'canton_id' => 21,
        ]);
        #endregion

        #region LAS NAVES
        Parish::create([
            'name' => 'LAS MERCEDES',
            'canton_id' => 22,
        ]);
        Parish::create([
            'name' => 'LAS NAVES',
            'canton_id' => 22,
        ]);
        #endregion

        #region AZOGUES-CAÑAR
        Parish::create([
            'name' => 'AURELIO BAYAS MARTÍNEZ',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'AZOGUES',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'BORRERO',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'COJITAMBO',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'DÉLEG',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'GUAPÁN',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'JAVIER LOYOLA (CHUQUIPATA)',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'LUIS CORDERO',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'PINDILIG',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'RIVERA',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'SAN MIGUEL',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'SOLANO',
            'canton_id' => 23,
        ]);
        Parish::create([
            'name' => 'TADAY',
            'canton_id' => 23,
        ]);
        #endregion

        #region BIBLIÁN
        Parish::create([
            'name' => 'BIBLIÁN',
            'canton_id' => 24,
        ]);
        Parish::create([
            'name' => 'NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)',
            'canton_id' => 24,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DE SAGEO',
            'canton_id' => 24,
        ]);
        Parish::create([
            'name' => 'TURUPAMBA',
            'canton_id' => 24,
        ]);
        Parish::create([
            'name' => 'JERUSALÉN',
            'canton_id' => 24,
        ]);
        #endregion

        #region CAÑAR
        Parish::create([
            'name' => 'CAÑAR',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'CHONTAMARCA',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'CHOROCOPTE',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'GENERAL MORALES (SOCARTE)',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'GUALLETURO',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'HONORATO VÁSQUEZ (TAMBO VIEJO)',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'INGAPIRCA',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'JUNCAL',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'SUSCAL',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'TAMBO',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'ZHUD',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'VENTURA',
            'canton_id' => 25,
        ]);
        Parish::create([
            'name' => 'DUCUR',
            'canton_id' => 25,
        ]);
        #endregion

        #region LA TRONCAL
        Parish::create([
            'name' => 'LA TRONCAL',
            'canton_id' => 26,
        ]);
        Parish::create([
            'name' => 'MANUEL J. CALLE',
            'canton_id' => 26,
        ]);
        Parish::create([
            'name' => 'PANCHO NEGRO',
            'canton_id' => 26,
        ]);
        #endregion

        #region EL TAMBO
        Parish::create([
            'name' => 'EL TAMBO',
            'canton_id' => 27,
        ]);
        #endregion

        #region DÉLEG
        Parish::create([
            'name' => 'DÉLEG ',
            'canton_id' => 28,
        ]);
        Parish::create([
            'name' => 'SOLANO',
            'canton_id' => 28,
        ]);
        #endregion

        #region SUSCAL
        Parish::create([
            'name' => 'SUSCAL ',
            'canton_id' => 29,
        ]);
        #endregion

        #region TULCÁN-CARCHI
        Parish::create([
            'name' => 'TULCÁN',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'GONZÁLEZ SUÁREZ',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'EL CARMELO (EL PUN)',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'HUACA',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'JULIO ANDRADE (OREJUELA)',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'MALDONADO',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'PIOTER',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'TUFIÑO',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'URBINA (TAYA)',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'EL CHICAL',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'MARISCAL SUCRE',
            'canton_id' => 30,
        ]);
        Parish::create([
            'name' => 'SANTA MARTHA DE CUBA',
            'canton_id' => 30,
        ]);
        #endregion

        #region BOLÍVAR
        Parish::create([
            'name' => 'BOLÍVAR',
            'canton_id' => 31,
        ]);
        Parish::create([
            'name' => 'GARCÍA MORENO',
            'canton_id' => 31,
        ]);
        Parish::create([
            'name' => 'LOS ANDES',
            'canton_id' => 31,
        ]);
        Parish::create([
            'name' => 'MONTE OLIVO',
            'canton_id' => 31,
        ]);
        Parish::create([
            'name' => 'SAN VICENTE DE PUSIR',
            'canton_id' => 31,
        ]);
        Parish::create([
            'name' => 'SAN RAFAEL',
            'canton_id' => 31,
        ]);
        #endregion

        #region ESPEJO
        Parish::create([
            'name' => 'EL ÁNGEL',
            'canton_id' => 32,
        ]);
        Parish::create([
            'name' => '27 DE SEPTIEMBRE',
            'canton_id' => 32,
        ]);
        Parish::create([
            'name' => 'EL ANGEL',
            'canton_id' => 32,
        ]);
        Parish::create([
            'name' => 'EL GOALTAL',
            'canton_id' => 32,
        ]);
        Parish::create([
            'name' => 'LA LIBERTAD (ALIZO)',
            'canton_id' => 32,
        ]);
        Parish::create([
            'name' => 'SAN ISIDRO',
            'canton_id' => 32,
        ]);
        #endregion

        #region MIRA
        Parish::create([
            'name' => 'MIRA (CHONTAHUASI)',
            'canton_id' => 33,
        ]);
        Parish::create([
            'name' => 'CONCEPCIÓN',
            'canton_id' => 33,
        ]);
        Parish::create([
            'name' => 'JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)',
            'canton_id' => 33,
        ]);
        Parish::create([
            'name' => 'JUAN MONTALVO (SAN IGNACIO DE QUIL)',
            'canton_id' => 33,
        ]);
        #endregion

        #region MONTÚFAR
        Parish::create([
            'name' => 'GONZÁLEZ SUÁREZ',
            'canton_id' => 34,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ',
            'canton_id' => 34,
        ]);
        Parish::create([
            'name' => 'SAN GABRIEL',
            'canton_id' => 34,
        ]);
        Parish::create([
            'name' => 'CRISTÓBAL COLÓN',
            'canton_id' => 34,
        ]);
        Parish::create([
            'name' => 'CHITÁN DE NAVARRETE',
            'canton_id' => 34,
        ]);
        Parish::create([
            'name' => 'FERNÁNDEZ SALVADOR',
            'canton_id' => 34,
        ]);
        Parish::create([
            'name' => 'LA PAZ',
            'canton_id' => 34,
        ]);
        Parish::create([
            'name' => 'PIARTAL',
            'canton_id' => 34,
        ]);
        #endregion

        #region SAN PEDRO DE HUACA
        Parish::create([
            'name' => 'HUACA',
            'canton_id' => 35,
        ]);
        Parish::create([
            'name' => 'MARISCAL SUCRE',
            'canton_id' => 35,
        ]);
        #endregion

        #region LATACUNGA-COTOPAXI
        Parish::create([
            'name' => 'ELOY ALFARO (SAN FELIPE)',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'IGNACIO FLORES (PARQUE FLORES)',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'JUAN MONTALVO (SAN SEBASTIÁN)',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'LA MATRIZ',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'SAN BUENAVENTURA',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'LATACUNGA',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'ALAQUES (ALÁQUEZ)',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'BELISARIO QUEVEDO (GUANAILÍN)',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'GUAITACAMA (GUAYTACAMA)',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'JOSEGUANGO BAJO',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'LAS PAMPAS - LATACUNGA',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'MULALÓ',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => '11 DE NOVIEMBRE (ILINCHISI)',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'POALÓ',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'SAN JUAN DE PASTOCALLE',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'TANICUCHÍ',
            'canton_id' => 36,
        ]);
        Parish::create([
            'name' => 'TOACASO',
            'canton_id' => 36,
        ]);
        #endregion

        #region LA MANÁ
        Parish::create([
            'name' => 'EL CARMEN',
            'canton_id' => 37,
        ]);
        Parish::create([
            'name' => 'LA MANÁ',
            'canton_id' => 37,
        ]);
        Parish::create([
            'name' => 'EL TRIUNFO',
            'canton_id' => 37,
        ]);
        Parish::create([
            'name' => 'GUASAGANDA (CAB.EN GUASAGANDA',
            'canton_id' => 37,
        ]);
        Parish::create([
            'name' => 'PUCAYACU',
            'canton_id' => 37,
        ]);
        #endregion

        #region PANGUA
        Parish::create([
            'name' => 'EL CORAZÓN',
            'canton_id' => 38,
        ]);
        Parish::create([
            'name' => 'MORASPUNGO',
            'canton_id' => 38,
        ]);
        Parish::create([
            'name' => 'PINLLOPATA',
            'canton_id' => 38,
        ]);
        Parish::create([
            'name' => 'RAMÓN CAMPAÑA',
            'canton_id' => 38,
        ]);
        #endregion

        #region PUJILI
        Parish::create([
            'name' => 'PUJILÍ',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'ANGAMARCA',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'CHUCCHILÁN (CHUGCHILÁN) - PUJILI',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'GUANGAJE',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'ISINLIBÍ (ISINLIVÍ)',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'LA VICTORIA',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'PILALÓ',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'TINGO',
            'canton_id' => 39,
        ]);
        Parish::create([
            'name' => 'ZUMBAHUA',
            'canton_id' => 39,
        ]);

        #endregion

        #region SALCEDO
        Parish::create([
            'name' => 'SAN MIGUEL',
            'canton_id' => 40,
        ]);
        Parish::create([
            'name' => 'ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)',
            'canton_id' => 40,
        ]);
        Parish::create([
            'name' => 'CUSUBAMBA',
            'canton_id' => 40,
        ]);
        Parish::create([
            'name' => 'MULALILLO',
            'canton_id' => 40,
        ]);
        Parish::create([
            'name' => 'MULLIQUINDIL (SANTA ANA)',
            'canton_id' => 40,
        ]);
        Parish::create([
            'name' => 'PANSALEO',
            'canton_id' => 40,
        ]);
        #endregion

        #region SAQUISILÍ
        Parish::create([
            'name' => 'SAQUISILÍ',
            'canton_id' => 41,
        ]);
        Parish::create([
            'name' => 'CANCHAGUA',
            'canton_id' => 41,
        ]);
        Parish::create([
            'name' => 'CHANTILÍN',
            'canton_id' => 41,
        ]);
        Parish::create([
            'name' => 'COCHAPAMBA',
            'canton_id' => 41,
        ]);
        #endregion

        #region SIGCHOS
        Parish::create([
            'name' => 'SIGCHOS',
            'canton_id' => 42,
        ]);
        Parish::create([
            'name' => 'CHUGCHILLÁN - SIGCHOS',
            'canton_id' => 42,
        ]);
        Parish::create([
            'name' => 'ISINLIVÍ',
            'canton_id' => 42,
        ]);
        Parish::create([
            'name' => 'LAS PAMPAS - SIGCHOS',
            'canton_id' => 42,
        ]);
        Parish::create([
            'name' => 'PALO QUEMADO',
            'canton_id' => 42,
        ]);
        #endregion

        #region RIOBAMBA-RIOBAMBA
        Parish::create([
            'name' => 'RIOBAMBA',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'LIZARZABURU',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'MALDONADO',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'VELASCO',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'VELOZ',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'YARUQUÍES',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'CACHA (CAB. EN MACHÁNGARA)',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'CALPI',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'CUBIJÍES',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'FLORES',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'LICÁN',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'LICTO',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'PUNGALÁ',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'PUNÍN',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'QUIMIAG',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'SAN JUAN',
            'canton_id' => 43,
        ]);
        Parish::create([
            'name' => 'SAN LUIS',
            'canton_id' => 43,
        ]);
        #endregion

        #region ALAUSI
        Parish::create([
            'name' => 'ALAUSÍ',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'ACHUPALLAS',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'CUMANDÁ',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'GUASUNTOS',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'HUIGRA',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'MULTITUD',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'PISTISHÍ (NARIZ DEL DIABLO)',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'PUMALLACTA',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'SEVILLA',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'SIBAMBE',
            'canton_id' => 44,
        ]);
        Parish::create([
            'name' => 'TIXÁN',
            'canton_id' => 44,
        ]);
        #endregion

        #region COLTA
        Parish::create([
            'name' => 'CAJABAMBA',
            'canton_id' => 45,
        ]);
        Parish::create([
            'name' => 'SICALPA',
            'canton_id' => 45,
        ]);
        Parish::create([
            'name' => 'VILLA LA UNIÓN (CAJABAMBA)',
            'canton_id' => 45,
        ]);
        Parish::create([
            'name' => 'CAÑI',
            'canton_id' => 45,
        ]);
        Parish::create([
            'name' => 'COLUMBE',
            'canton_id' => 45,
        ]);
        Parish::create([
            'name' => 'JUAN DE VELASCO (PANGOR)',
            'canton_id' => 45,
        ]);
        Parish::create([
            'name' => 'SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)',
            'canton_id' => 45,
        ]);
        #endregion

        #region CHAMBO
        Parish::create([
            'name' => 'CHAMBO',
            'canton_id' => 46,
        ]);
        #endregion

        #region CHUNCHI
        Parish::create([
            'name' => 'CHUNCHI',
            'canton_id' => 47,
        ]);
        Parish::create([
            'name' => 'CAPZOL',
            'canton_id' => 47,
        ]);
        Parish::create([
            'name' => 'COMPUD',
            'canton_id' => 47,
        ]);
        Parish::create([
            'name' => 'GONZOL',
            'canton_id' => 47,
        ]);
        Parish::create([
            'name' => 'LLAGOS',
            'canton_id' => 47,
        ]);
        #endregion

        #region GUAMOTE
        Parish::create([
            'name' => 'GUAMOTE',
            'canton_id' => 48,
        ]);
        Parish::create([
            'name' => 'CEBADAS',
            'canton_id' => 48,
        ]);
        Parish::create([
            'name' => 'PALMIRA',
            'canton_id' => 48,
        ]);
        #endregion

        #region GUANO
        Parish::create([
            'name' => 'EL ROSARIO',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'LA MATRIZ',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'GUANO',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'GUANANDO',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'ILAPO',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'LA PROVIDENCIA',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'SAN ANDRÉS',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'SAN GERARDO DE PACAICAGUÁN',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'SAN ISIDRO DE PATULÚ',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DEL CHAZO',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'SANTA FÉ DE GALÁN',
            'canton_id' => 49,
        ]);
        Parish::create([
            'name' => 'VALPARAÍSO',
            'canton_id' => 49,
        ]);
        #endregion

        #region PALLATANGA
        Parish::create([
            'name' => 'PALLATANGA ',
            'canton_id' => 50,
        ]);
        #endregion

        #region PENIPE
        Parish::create([
            'name' => 'PENIPE',
            'canton_id' => 51,
        ]);
        Parish::create([
            'name' => 'EL ALTAR',
            'canton_id' => 51,
        ]);
        Parish::create([
            'name' => 'MATUS',
            'canton_id' => 51,
        ]);
        Parish::create([
            'name' => 'PUELA',
            'canton_id' => 51,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO DE BAYUSHIG',
            'canton_id' => 51,
        ]);
        Parish::create([
            'name' => 'LA CANDELARIA',
            'canton_id' => 51,
        ]);
        Parish::create([
            'name' => 'BILBAO (CAB.EN QUILLUYACU)',
            'canton_id' => 51,
        ]);
        #endregion

        #region CUMANDÁ
        Parish::create([
            'name' => 'CUMANDÁ ',
            'canton_id' => 52,
        ]);
        #endregion

        #region MACHALA-EL ORO
        Parish::create([
            'name' => 'LA PROVIDENCIA',
            'canton_id' => 53,
        ]);
        Parish::create([
            'name' => 'MACHALA',
            'canton_id' => 53,
        ]);
        Parish::create([
            'name' => 'PUERTO BOLÍVAR',
            'canton_id' => 53,
        ]);
        Parish::create([
            'name' => 'NUEVE DE MAYO',
            'canton_id' => 53,
        ]);
        Parish::create([
            'name' => 'EL CAMBIO',
            'canton_id' => 53,
        ]);
        Parish::create([
            'name' => 'MACHALA',
            'canton_id' => 53,
        ]);
        Parish::create([
            'name' => 'EL CAMBIO',
            'canton_id' => 53,
        ]);
        Parish::create([
            'name' => 'EL RETIRO',
            'canton_id' => 53,
        ]);
        #endregion

        #region ARENILLAS
        Parish::create([
            'name' => 'ARENILLAS',
            'canton_id' => 54,
        ]);
        Parish::create([
            'name' => 'CHACRAS',
            'canton_id' => 54,
        ]);
        Parish::create([
            'name' => 'LA LIBERTAD',
            'canton_id' => 54,
        ]);
        Parish::create([
            'name' => 'LAS LAJAS (CAB. EN LA VICTORIA)',
            'canton_id' => 54,
        ]);
        Parish::create([
            'name' => 'PALMALES',
            'canton_id' => 54,
        ]);
        Parish::create([
            'name' => 'CARCABÓN',
            'canton_id' => 54,
        ]);
        #endregion

        #region ATAHUALPA
        Parish::create([
            'name' => 'PACCHA',
            'canton_id' => 55,
        ]);
        Parish::create([
            'name' => 'AYAPAMBA',
            'canton_id' => 55,
        ]);
        Parish::create([
            'name' => 'CORDONCILLO',
            'canton_id' => 55,
        ]);
        Parish::create([
            'name' => 'MILAGRO',
            'canton_id' => 55,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ',
            'canton_id' => 55,
        ]);
        Parish::create([
            'name' => 'SAN JUAN DE CERRO AZUL',
            'canton_id' => 55,
        ]);
        #endregion

        #region BALSAS
        Parish::create([
            'name' => 'BALSAS',
            'canton_id' => 56,
        ]);
        Parish::create([
            'name' => 'BELLAMARÍA',
            'canton_id' => 56,
        ]);
        #endregion

        #region CHILLA
        Parish::create([
            'name' => 'CHILLA',
            'canton_id' => 57,
        ]);
        #endregion

        #region EL GUABO
        Parish::create([
            'name' => 'EL GUABO',
            'canton_id' => 58,
        ]);
        Parish::create([
            'name' => 'BARBONES (SUCRE)',
            'canton_id' => 58,
        ]);
        Parish::create([
            'name' => 'LA IBERIA',
            'canton_id' => 58,
        ]);
        Parish::create([
            'name' => 'TENDALES (CAB.EN PUERTO TENDALES)',
            'canton_id' => 58,
        ]);
        Parish::create([
            'name' => 'RÍO BONITO',
            'canton_id' => 58,
        ]);
        #endregion

        #region HUAQUILLAS
        Parish::create([
            'name' => 'HUAQUILLAS',
            'canton_id' => 59,
        ]);
        Parish::create([
            'name' => 'ECUADOR',
            'canton_id' => 59,
        ]);
        Parish::create([
            'name' => 'EL PARAÍSO',
            'canton_id' => 59,
        ]);
        Parish::create([
            'name' => 'HUALTACO',
            'canton_id' => 59,
        ]);
        Parish::create([
            'name' => 'MILTON REYES',
            'canton_id' => 59,
        ]);
        Parish::create([
            'name' => 'UNIÓN LOJANA',
            'canton_id' => 59,
        ]);
        #endregion

        #region MARCABELÍ
        Parish::create([
            'name' => 'MARCABELÍ',
            'canton_id' => 60,
        ]);
        Parish::create([
            'name' => 'EL INGENIO',
            'canton_id' => 60,
        ]);
        #endregion

        #region PASAJE
        Parish::create([
            'name' => 'BOLÍVAR',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'LOMA DE FRANCO',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'OCHOA LEÓN (MATRIZ)',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'TRES CERRITOS',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'PASAJE',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'BUENAVISTA',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'CASACAY',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'LA PEAÑA',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'PROGRESO',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'UZHCURRUMI',
            'canton_id' => 61,
        ]);
        Parish::create([
            'name' => 'CAÑAQUEMADA',
            'canton_id' => 61,
        ]);
        #endregion

        #region PIÑAS
        Parish::create([
            'name' => 'LA MATRIZ',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'LA SUSAYA',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'PIÑAS GRANDE',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'PIÑAS',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'LA BOCANA',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'MOROMORO (CAB. EN EL VADO)',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'PIEDRAS',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'SAN ROQUE (AMBROSIO MALDONADO)',
            'canton_id' => 62,
        ]);
        Parish::create([
            'name' => 'SARACAY',
            'canton_id' => 62,
        ]);
        #endregion

        #region PORTOVELO
        Parish::create([
            'name' => 'PORTOVELO',
            'canton_id' => 63,
        ]);
        Parish::create([
            'name' => 'CURTINCAPA',
            'canton_id' => 63,
        ]);
        Parish::create([
            'name' => 'MORALES',
            'canton_id' => 63,
        ]);
        Parish::create([
            'name' => 'SALATÍ',
            'canton_id' => 63,
        ]);
        #endregion

        #region SANTA ROSA
        Parish::create([
            'name' => 'SANTA ROSA',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'PUERTO JELÍ',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'BALNEARIO JAMBELÍ (SATÉLITE)',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'JUMÓN (SATÉLITE)',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'NUEVO SANTA ROSA',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'BELLAVISTA',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'JAMBELÍ',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'LA AVANZADA',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'TORATA',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'VICTORIA',
            'canton_id' => 64,
        ]);
        Parish::create([
            'name' => 'BELLAMARÍA',
            'canton_id' => 64,
        ]);
        #endregion

        #region ZARUMA
        Parish::create([
            'name' => 'ZARUMA',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'ABAÑÍN',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'ARCAPAMBA',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'GUANAZÁN',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'GUIZHAGUIÑA',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'HUERTAS',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'MALVAS',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'MULUNCAY GRANDE',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'SINSAO',
            'canton_id' => 65,
        ]);
        Parish::create([
            'name' => 'SALVIAS',
            'canton_id' => 65,
        ]);
        #endregion

        #region LAS LAJAS
        Parish::create([
            'name' => 'LA VICTORIA',
            'canton_id' => 66,
        ]);
        Parish::create([
            'name' => 'PLATANILLOS',
            'canton_id' => 66,
        ]);
        Parish::create([
            'name' => 'VALLE HERMOSO',
            'canton_id' => 66,
        ]);
        Parish::create([
            'name' => 'LA VICTORIA',
            'canton_id' => 66,
        ]);
        Parish::create([
            'name' => 'LA LIBERTAD',
            'canton_id' => 66,
        ]);
        Parish::create([
            'name' => 'EL PARAÍSO',
            'canton_id' => 66,
        ]);
        Parish::create([
            'name' => 'SAN ISIDRO',
            'canton_id' => 66,
        ]);
        #endregion

        #region ESMERALDAS-ESMERALDAS
        Parish::create([
            'name' => 'BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => '5 DE AGOSTO',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'ESMERALDAS',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'LUIS TELLO (LAS PALMAS)',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'SIMÓN PLATA TORRES',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'ATACAMES',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'CAMARONES (CAB. EN SAN VICENTE)',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'CHINCA',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'CHONTADURO',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'CHUMUNDÉ',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'LAGARTO',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'LA UNIÓN',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'MAJUA',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'MONTALVO (CAB. EN HORQUETA)',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'RÍO VERDE',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'ROCAFUERTE',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'SAN MATEO',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'SÚA (CAB. EN LA BOCANA)',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'TABIAZO',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'TACHINA',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'TONCHIGÜE',
            'canton_id' => 67,
        ]);
        Parish::create([
            'name' => 'VUELTA LARGA',
            'canton_id' => 67,
        ]);
        #endregion

        #region ELOY ALFARO
        Parish::create([
            'name' => 'VALDEZ (LIMONES)',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'ANCHAYACU',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'ATAHUALPA (CAB. EN CAMARONES)',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'BORBÓN',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'LA TOLA',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'MALDONADO',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'PAMPANAL DE BOLÍVAR',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DE ONZOLE',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'SANTO DOMINGO DE ONZOLE',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'SELVA ALEGRE',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'TELEMBÍ',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'COLÓN ELOY DEL MARÍA',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE CAYAPAS',
            'canton_id' => 68,
        ]);
        Parish::create([
            'name' => 'TIMBIRÉ',
            'canton_id' => 68,
        ]);
        #endregion

        #region MUISNE
        Parish::create([
            'name' => 'MUISNE',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'BOLÍVAR',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'DAULE',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'GALERA',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'QUINGUE (OLMEDO PERDOMO FRANCO)',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'SALIMA',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'SAN GREGORIO',
            'canton_id' => 69,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)',
            'canton_id' => 69,
        ]);
        #endregion

        #region QUININDÉ
        Parish::create([
            'name' => 'ROSA ZÁRATE (QUININDÉ)',
            'canton_id' => 70,
        ]);
        Parish::create([
            'name' => 'CUBE',
            'canton_id' => 70,
        ]);
        Parish::create([
            'name' => 'CHURA (CHANCAMA) (CAB. EN EL YERBERO)',
            'canton_id' => 70,
        ]);
        Parish::create([
            'name' => 'MALIMPIA',
            'canton_id' => 70,
        ]);
        Parish::create([
            'name' => 'VICHE',
            'canton_id' => 70,
        ]);
        Parish::create([
            'name' => 'LA UNIÓN',
            'canton_id' => 70,
        ]);
        #endregion

        #region SAN LORENZO
        Parish::create([
            'name' => 'SAN LORENZO',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'ALTO TAMBO (CAB. EN GUADUAL)',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'CALDERÓN',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'CARONDELET',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => '5 DE JUNIO (CAB. EN UIMBI)',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'CONCEPCIÓN',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'MATAJE (CAB. EN SANTANDER)',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'SANTA RITA',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'TAMBILLO',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'TULULBÍ (CAB. EN RICAURTE)',
            'canton_id' => 71,
        ]);
        Parish::create([
            'name' => 'URBINA',
            'canton_id' => 71,
        ]);
        #endregion

        #region ATACAMES
        Parish::create([
            'name' => 'ATACAMES',
            'canton_id' => 72,
        ]);
        Parish::create([
            'name' => 'LA UNIÓN',
            'canton_id' => 72,
        ]);
        Parish::create([
            'name' => 'SÚA (CAB. EN LA BOCANA)',
            'canton_id' => 72,
        ]);
        Parish::create([
            'name' => 'TONCHIGÜE',
            'canton_id' => 72,
        ]);
        Parish::create([
            'name' => 'TONSUPA',
            'canton_id' => 72,
        ]);
        #endregion

        #region RIOVERDE
        Parish::create([
            'name' => 'RIOVERDE',
            'canton_id' => 73,
        ]);
        Parish::create([
            'name' => 'CHONTADURO',
            'canton_id' => 73,
        ]);
        Parish::create([
            'name' => 'CHUMUNDÉ',
            'canton_id' => 73,
        ]);
        Parish::create([
            'name' => 'LAGARTO',
            'canton_id' => 73,
        ]);
        Parish::create([
            'name' => 'MONTALVO (CAB. EN HORQUETA)',
            'canton_id' => 73,
        ]);
        Parish::create([
            'name' => 'ROCAFUERTE',
            'canton_id' => 73,
        ]);
        #endregion

        #region LA CONCORDIA
        Parish::create([
            'name' => 'LA CONCORDIA',
            'canton_id' => 74,
        ]);
        Parish::create([
            'name' => 'MONTERREY',
            'canton_id' => 74,
        ]);
        Parish::create([
            'name' => 'LA VILLEGAS',
            'canton_id' => 74,
        ]);
        Parish::create([
            'name' => 'PLAN PILOTO',
            'canton_id' => 74,
        ]);
        #endregion

        #region GUAYAQUIL-GUAYAS
        Parish::create([
            'name' => 'AYACUCHO',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'BOLÍVAR (SAGRARIO)',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'CARBO (CONCEPCIÓN)',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'FEBRES CORDERO',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'GARCÍA MORENO',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'LETAMENDI',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'NUEVE DE OCTUBRE',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'OLMEDO (SAN ALEJO)',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'ROCA',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'ROCAFUERTE',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'SUCRE',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'TARQUI',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'URDANETA',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'XIMENA',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'PASCUALES',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'GUAYAQUIL',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'CHONGÓN',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'JUAN GÓMEZ RENDÓN (PROGRESO)',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'MORRO',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'PASCUALES',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'PLAYAS (GRAL. VILLAMIL)',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'POSORJA',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'PUNÁ',
            'canton_id' => 75,
        ]);
        Parish::create([
            'name' => 'TENGUEL',
            'canton_id' => 75,
        ]);
        #endregion

        #region ALFREDO BAQUERIZO MORENO (JUJÁN)
        Parish::create([
            'name' => 'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'canton_id' => 76,
        ]);
        #endregion

        #region BALAO
        Parish::create([
            'name' => 'BALAO',
            'canton_id' => 77,
        ]);
        #endregion

        #region BALZAR
        Parish::create([
            'name' => 'BALZAR',
            'canton_id' => 78,
        ]);
        #endregion

        #region COLIMES
        Parish::create([
            'name' => 'COLIMES',
            'canton_id' => 79,
        ]);
        Parish::create([
            'name' => 'SAN JACINTO',
            'canton_id' => 79,
        ]);
        #endregion

        #region DAULE
        Parish::create([
            'name' => 'DAULE',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'LA AURORA (SATÉLITE)',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'BANIFE',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'EMILIANO CAICEDO MARCOS',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'MAGRO',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'PADRE JUAN BAUTISTA AGUIRRE',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'SANTA CLARA',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'VICENTE PIEDRAHITA',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'ISIDRO AYORA (SOLEDAD)',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'JUAN BAUTISTA AGUIRRE (LOS TINTOS)',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'LAUREL',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'LIMONAL',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'LOMAS DE SARGENTILLO',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'LOS LOJAS (ENRIQUE BAQUERIZO MORENO)',
            'canton_id' => 80,
        ]);
        Parish::create([
            'name' => 'PIEDRAHITA (NOBOL)',
            'canton_id' => 80,
        ]);
        #endregion

        #region DURÁN
        Parish::create([
            'name' => 'ELOY ALFARO (DURÁN)',
            'canton_id' => 81,
        ]);
        Parish::create([
            'name' => 'EL RECREO',
            'canton_id' => 81,
        ]);
        #endregion

        #region EL EMPALME
        Parish::create([
            'name' => 'VELASCO IBARRA (EL EMPALME)',
            'canton_id' => 82,
        ]);
        Parish::create([
            'name' => 'GUAYAS (PUEBLO NUEVO)',
            'canton_id' => 82,
        ]);
        Parish::create([
            'name' => 'EL ROSARIO',
            'canton_id' => 82,
        ]);
        #endregion

        #region EL TRIUNFO
        Parish::create([
            'name' => 'EL TRIUNFO ',
            'canton_id' => 83,
        ]);
        #endregion

        #region MILAGRO
        Parish::create([
            'name' => 'MILAGRO',
            'canton_id' => 84,
        ]);
        Parish::create([
            'name' => 'CHOBO',
            'canton_id' => 84,
        ]);
        Parish::create([
            'name' => 'GENERAL ELIZALDE (BUCAY)',
            'canton_id' => 84,
        ]);
        Parish::create([
            'name' => 'MARISCAL SUCRE (HUAQUES)',
            'canton_id' => 84,
        ]);
        Parish::create([
            'name' => 'ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)',
            'canton_id' => 84,
        ]);
        #endregion

        #region NARANJAL
        Parish::create([
            'name' => 'NARANJAL',
            'canton_id' => 85,
        ]);
        Parish::create([
            'name' => 'JESÚS MARÍA',
            'canton_id' => 85,
        ]);
        Parish::create([
            'name' => 'SAN CARLOS',
            'canton_id' => 85,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA DE FLANDES',
            'canton_id' => 85,
        ]);
        Parish::create([
            'name' => 'TAURA',
            'canton_id' => 85,
        ]);
        #endregion

        #region NARANJITO
        Parish::create([
            'name' => 'NARANJITO',
            'canton_id' => 86,
        ]);
        #endregion

        #region PALESTINA
        Parish::create([
            'name' => 'PALESTINA',
            'canton_id' => 87,
        ]);
        #endregion

        #region PEDRO CARBO
        Parish::create([
            'name' => 'PEDRO CARBO',
            'canton_id' => 88,
        ]);
        Parish::create([
            'name' => 'VALLE DE LA VIRGEN',
            'canton_id' => 88,
        ]);
        Parish::create([
            'name' => 'SABANILLA',
            'canton_id' => 88,
        ]);
        #endregion

        #region SAMBORONDÓN
        Parish::create([
            'name' => 'SAMBORONDÓN',
            'canton_id' => 89,
        ]);
        Parish::create([
            'name' => 'LA PUNTILLA (SATÉLITE)',
            'canton_id' => 89,
        ]);
        Parish::create([
            'name' => 'TARIFA',
            'canton_id' => 89,
        ]);
        #endregion

        #region SANTA LUCÍA
        Parish::create([
            'name' => 'SANTA LUCÍA',
            'canton_id' => 90,
        ]);
        #endregion

        #region SALITRE (URBINA JADO)
        Parish::create([
            'name' => 'BOCANA',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'CANDILEJOS',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'CENTRAL',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'PARAÍSO',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'SAN MATEO',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'EL SALITRE (LAS RAMAS)',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'GRAL. VERNAZA (DOS ESTEROS)',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'LA VICTORIA (ÑAUZA)',
            'canton_id' => 91,
        ]);
        Parish::create([
            'name' => 'JUNQUILLAL',
            'canton_id' => 91,
        ]);
        #endregion

        #region SAN JACINTO DE YAGUACHI
        Parish::create([
            'name' => 'SAN JACINTO DE YAGUACHI',
            'canton_id' => 92,
        ]);
        Parish::create([
            'name' => 'CRNEL. LORENZO DE GARAICOA (PEDREGAL)',
            'canton_id' => 92,
        ]);
        Parish::create([
            'name' => 'CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)',
            'canton_id' => 92,
        ]);
        Parish::create([
            'name' => 'GRAL. PEDRO J. MONTERO (BOLICHE)',
            'canton_id' => 92,
        ]);
        Parish::create([
            'name' => 'SIMÓN BOLÍVAR',
            'canton_id' => 92,
        ]);
        Parish::create([
            'name' => 'YAGUACHI VIEJO (CONE)',
            'canton_id' => 92,
        ]);
        Parish::create([
            'name' => 'VIRGEN DE FÁTIMA',
            'canton_id' => 92,
        ]);
        #endregion

        #region PLAYAS
        Parish::create([
            'name' => 'GENERAL VILLAMIL (PLAYAS)',
            'canton_id' => 93,
        ]);
        #endregion

        #region SIMÓN BOLÍVAR
        Parish::create([
            'name' => 'SIMÓN BOLÍVAR',
            'canton_id' => 94,
        ]);
        Parish::create([
            'name' => 'CRNEL.LORENZO DE GARAICOA (PEDREGAL)',
            'canton_id' => 94,
        ]);
        #endregion

        #region CORONEL MARCELINO MARIDUEÑA
        Parish::create([
            'name' => 'CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)',
            'canton_id' => 95,
        ]);
        #endregion

        #region LOMAS DE SARGENTILLO
        Parish::create([
            'name' => 'LOMAS DE SARGENTILLO',
            'canton_id' => 96,
        ]);
        Parish::create([
            'name' => 'ISIDRO AYORA (SOLEDAD)',
            'canton_id' => 96,
        ]);
        #endregion

        #region NOBOL
        Parish::create([
            'name' => 'NARCISA DE JESÚS',
            'canton_id' => 97,
        ]);
        #endregion

        #region GENERAL ANTONIO ELIZALDE
        Parish::create([
            'name' => 'GENERAL ANTONIO ELIZALDE (BUCAY)',
            'canton_id' => 98,
        ]);
        #endregion

        #region ISIDRO AYORA
        Parish::create([
            'name' => 'ISIDRO AYORA',
            'canton_id' => 99,
        ]);
        #endregion

        #region IBARRA-IMBABURA
        Parish::create([
            'name' => 'CARANQUI',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'GUAYAQUIL DE ALPACHACA',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'SAGRARIO',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'LA DOLOROSA DEL PRIORATO',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'SAN MIGUEL DE IBARRA',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'AMBUQUÍ',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'ANGOCHAGUA',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'CAROLINA',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'LA ESPERANZA',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'LITA',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'SALINAS',
            'canton_id' => 100,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO',
            'canton_id' => 100,
        ]);
        #endregion

        #region ANTONIO ANTE
        Parish::create([
            'name' => 'ANDRADE MARÍN (LOURDES)',
            'canton_id' => 101,
        ]);
        Parish::create([
            'name' => 'ATUNTAQUI',
            'canton_id' => 101,
        ]);
        Parish::create([
            'name' => 'IMBAYA (SAN LUIS DE COBUENDO)',
            'canton_id' => 101,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DE NATABUELA',
            'canton_id' => 101,
        ]);
        Parish::create([
            'name' => 'SAN ROQUE',
            'canton_id' => 101,
        ]);
        #endregion

        #region COTACACHI
        Parish::create([
            'name' => 'SAGRARIO',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'COTACACHI',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'APUELA',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'GARCÍA MORENO (LLURIMAGUA)',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'IMANTAG',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'PEÑAHERRERA',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'PLAZA GUTIÉRREZ (CALVARIO)',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'QUIROGA',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => '6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)',
            'canton_id' => 102,
        ]);
        Parish::create([
            'name' => 'VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO',
            'canton_id' => 102,
        ]);
        #endregion

        #region OTAVALO
        Parish::create([
            'name' => 'JORDÁN',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'SAN LUIS',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'OTAVALO',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'DR. MIGUEL EGAS CABEZAS (PEGUCHE)',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'EUGENIO ESPEJO (CALPAQUÍ)',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'GONZÁLEZ SUÁREZ',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'PATAQUÍ',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE QUICHINCHE',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'SAN JUAN DE ILUMÁN',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'SAN PABLO',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'SAN RAFAEL',
            'canton_id' => 103,
        ]);
        Parish::create([
            'name' => 'SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)',
            'canton_id' => 103,
        ]);
        #endregion

        #region PIMAMPIRO
        Parish::create([
            'name' => 'PIMAMPIRO ',
            'canton_id' => 104,
        ]);
        Parish::create([
            'name' => 'CHUGÁ',
            'canton_id' => 104,
        ]);
        Parish::create([
            'name' => 'MARIANO ACOSTA',
            'canton_id' => 104,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DE SIGSIPAMBA',
            'canton_id' => 104,
        ]);
        #endregion

        #region SAN MIGUEL DE URCUQUÍ
        Parish::create([
            'name' => 'URCUQUÍ CABECERA CANTONAL',
            'canton_id' => 105,
        ]);
        Parish::create([
            'name' => 'CAHUASQUÍ',
            'canton_id' => 105,
        ]);
        Parish::create([
            'name' => 'LA MERCED DE BUENOS AIRES',
            'canton_id' => 105,
        ]);
        Parish::create([
            'name' => 'PABLO ARENAS',
            'canton_id' => 105,
        ]);
        Parish::create([
            'name' => 'SAN BLAS',
            'canton_id' => 105,
        ]);
        Parish::create([
            'name' => 'TUMBABIRO',
            'canton_id' => 105,
        ]);
        #endregion

        #region LOJA-LOJA
        Parish::create([
            'name' => 'EL SAGRARIO',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'SAN SEBASTIÁN',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'SUCRE',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'VALLE',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'LOJA',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'CHANTACO',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'CHUQUIRIBAMBA',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'EL CISNE',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'GUALEL',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'JIMBILLA',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'MALACATOS (VALLADOLID)',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'SAN LUCAS',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'SAN PEDRO DE VILCABAMBA',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'SANTIAGO',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'TAQUIL (MIGUEL RIOFRÍO)',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'VILCABAMBA (VICTORIA)',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'YANGANA (ARSENIO CASTILLO)',
            'canton_id' => 106,
        ]);
        Parish::create([
            'name' => 'QUINARA',
            'canton_id' => 106,
        ]);
        #endregion

        #region CALVAS
        Parish::create([
            'name' => 'CARIAMANGA',
            'canton_id' => 107,
        ]);
        Parish::create([
            'name' => 'CHILE',
            'canton_id' => 107,
        ]);
        Parish::create([
            'name' => 'SAN VICENTE',
            'canton_id' => 107,
        ]);
        Parish::create([
            'name' => 'CARIAMANGA',
            'canton_id' => 107,
        ]);
        Parish::create([
            'name' => 'COLAISACA',
            'canton_id' => 107,
        ]);
        Parish::create([
            'name' => 'EL LUCERO',
            'canton_id' => 107,
        ]);
        Parish::create([
            'name' => 'UTUANA',
            'canton_id' => 107,
        ]);
        Parish::create([
            'name' => 'SANGUILLÍN',
            'canton_id' => 107,
        ]);
        #endregion

        #region CATAMAYO
        Parish::create([
            'name' => 'CATAMAYO',
            'canton_id' => 108,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ',
            'canton_id' => 108,
        ]);
        Parish::create([
            'name' => 'CATAMAYO (LA TOMA)',
            'canton_id' => 108,
        ]);
        Parish::create([
            'name' => 'EL TAMBO',
            'canton_id' => 108,
        ]);
        Parish::create([
            'name' => 'GUAYQUICHUMA',
            'canton_id' => 108,
        ]);
        Parish::create([
            'name' => 'SAN PEDRO DE LA BENDITA',
            'canton_id' => 108,
        ]);
        Parish::create([
            'name' => 'ZAMBI',
            'canton_id' => 108,
        ]);
        #endregion

        #region CELICA
        Parish::create([
            'name' => 'CELICA',
            'canton_id' => 109,
        ]);
        Parish::create([
            'name' => 'CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)',
            'canton_id' => 109,
        ]);
        Parish::create([
            'name' => 'CHAQUINAL',
            'canton_id' => 109,
        ]);
        Parish::create([
            'name' => '12 DE DICIEMBRE (CAB. EN ACHIOTES)',
            'canton_id' => 109,
        ]);
        Parish::create([
            'name' => 'PINDAL (FEDERICO PÁEZ)',
            'canton_id' => 109,
        ]);
        Parish::create([
            'name' => 'POZUL (SAN JUAN DE POZUL)',
            'canton_id' => 109,
        ]);
        Parish::create([
            'name' => 'SABANILLA',
            'canton_id' => 109,
        ]);
        Parish::create([
            'name' => 'TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA',
            'canton_id' => 109,
        ]);
        #endregion

        #region CHAGUARPAMBA
        Parish::create([
            'name' => 'CHAGUARPAMBA',
            'canton_id' => 110,
        ]);
        Parish::create([
            'name' => 'BUENAVISTA',
            'canton_id' => 110,
        ]);
        Parish::create([
            'name' => 'EL ROSARIO',
            'canton_id' => 110,
        ]);
        Parish::create([
            'name' => 'SANTA RUFINA',
            'canton_id' => 110,
        ]);
        Parish::create([
            'name' => 'AMARILLOS',
            'canton_id' => 110,
        ]);
        #endregion

        #region ESPÍNDOLA
        Parish::create([
            'name' => 'AMALUZA',
            'canton_id' => 111,
        ]);
        Parish::create([
            'name' => 'BELLAVISTA',
            'canton_id' => 111,
        ]);
        Parish::create([
            'name' => 'JIMBURA',
            'canton_id' => 111,
        ]);
        Parish::create([
            'name' => 'SANTA TERESITA',
            'canton_id' => 111,
        ]);
        Parish::create([
            'name' => '27 DE ABRIL (CAB. EN LA NARANJA)',
            'canton_id' => 111,
        ]);
        Parish::create([
            'name' => 'EL INGENIO',
            'canton_id' => 111,
        ]);
        Parish::create([
            'name' => 'EL AIRO',
            'canton_id' => 111,
        ]);
        #endregion

        #region GONZANAMÁ
        Parish::create([
            'name' => 'GONZANAMÁ',
            'canton_id' => 112,
        ]);
        Parish::create([
            'name' => 'CHANGAIMINA (LA LIBERTAD)',
            'canton_id' => 112,
        ]);
        Parish::create([
            'name' => 'FUNDOCHAMBA',
            'canton_id' => 112,
        ]);
        Parish::create([
            'name' => 'NAMBACOLA',
            'canton_id' => 112,
        ]);
        Parish::create([
            'name' => 'PURUNUMA (EGUIGUREN)',
            'canton_id' => 112,
        ]);
        Parish::create([
            'name' => 'QUILANGA (LA PAZ)',
            'canton_id' => 112,
        ]);
        Parish::create([
            'name' => 'SACAPALCA',
            'canton_id' => 112,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
            'canton_id' => 112,
        ]);
        #endregion

        #region MACARÁ
        Parish::create([
            'name' => 'GENERAL ELOY ALFARO (SAN SEBASTIÁN)',
            'canton_id' => 113,
        ]);
        Parish::create([
            'name' => 'MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)',
            'canton_id' => 113,
        ]);
        Parish::create([
            'name' => 'MACARÁ',
            'canton_id' => 113,
        ]);
        Parish::create([
            'name' => 'LARAMA',
            'canton_id' => 113,
        ]);
        Parish::create([
            'name' => 'LA VICTORIA',
            'canton_id' => 113,
        ]);
        Parish::create([
            'name' => 'SABIANGO (LA CAPILLA)',
            'canton_id' => 113,
        ]);
        #endregion

        #region PALTAS
        Parish::create([
            'name' => 'CATACOCHA',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'LOURDES',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'CANGONAMÁ',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'GUACHANAMÁ',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'LA TINGUE',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'LAURO GUERRERO',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'OLMEDO (SANTA BÁRBARA)',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'ORIANGA',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'CASANGA',
            'canton_id' => 114,
        ]);
        Parish::create([
            'name' => 'YAMANA',
            'canton_id' => 114,
        ]);
        #endregion

        #region PUYANGO
        Parish::create([
            'name' => 'ALAMOR',
            'canton_id' => 115,
        ]);
        Parish::create([
            'name' => 'CIANO',
            'canton_id' => 115,
        ]);
        Parish::create([
            'name' => 'EL ARENAL',
            'canton_id' => 115,
        ]);
        Parish::create([
            'name' => 'EL LIMO (MARIANA DE JESÚS)',
            'canton_id' => 115,
        ]);
        Parish::create([
            'name' => 'MERCADILLO',
            'canton_id' => 115,
        ]);
        Parish::create([
            'name' => 'VICENTINO',
            'canton_id' => 115,
        ]);
        #endregion

        #region SARAGURO
        Parish::create([
            'name' => 'SARAGURO',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'EL PARAÍSO DE CELÉN',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'EL TABLÓN',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'LLUZHAPA',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'MANÚ',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO DE QUMBE (CUMBE)',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'SAN PABLO DE TENTA',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'SAN SEBASTIÁN DE YÚLUC',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'SELVA ALEGRE',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'URDANETA (PAQUISHAPA)',
            'canton_id' => 116,
        ]);
        Parish::create([
            'name' => 'SUMAYPAMBA',
            'canton_id' => 116,
        ]);
        #endregion

        #region SOZORANGA
        Parish::create([
            'name' => 'SOZORANGA',
            'canton_id' => 117,
        ]);
        Parish::create([
            'name' => 'NUEVA FÁTIMA',
            'canton_id' => 117,
        ]);
        Parish::create([
            'name' => 'TACAMOROS',
            'canton_id' => 117,
        ]);
        #endregion

        #region ZAPOTILLO
        Parish::create([
            'name' => 'ZAPOTILLO',
            'canton_id' => 118,
        ]);
        Parish::create([
            'name' => 'MANGAHURCO (CAZADEROS)',
            'canton_id' => 118,
        ]);
        Parish::create([
            'name' => 'GARZAREAL',
            'canton_id' => 118,
        ]);
        Parish::create([
            'name' => 'LIMONES',
            'canton_id' => 118,
        ]);
        Parish::create([
            'name' => 'PALETILLAS',
            'canton_id' => 118,
        ]);
        Parish::create([
            'name' => 'BOLASPAMBA',
            'canton_id' => 118,
        ]);
        #endregion

        #region PINDAL
        Parish::create([
            'name' => 'PINDAL',
            'canton_id' => 119,
        ]);
        Parish::create([
            'name' => 'CHAQUINAL',
            'canton_id' => 119,
        ]);
        Parish::create([
            'name' => '12 DE DICIEMBRE (CAB.EN ACHIOTES)',
            'canton_id' => 119,
        ]);
        Parish::create([
            'name' => 'MILAGROS',
            'canton_id' => 119,
        ]);
        #endregion

        #region QUILANGA
        Parish::create([
            'name' => 'QUILANGA',
            'canton_id' => 120,
        ]);
        Parish::create([
            'name' => 'FUNDOCHAMBA',
            'canton_id' => 120,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)',
            'canton_id' => 120,
        ]);
        #endregion

        #region OLMEDO
        Parish::create([
            'name' => 'OLMEDO',
            'canton_id' => 121,
        ]);
        Parish::create([
            'name' => 'LA TINGUE',
            'canton_id' => 121,
        ]);
        #endregion

        #region BABAHOYO-LOS RIOS
        Parish::create([
            'name' => 'CLEMENTE BAQUERIZO',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'DR. CAMILO PONCE',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'BARREIRO',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'EL SALTO',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'BABAHOYO',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'BARREIRO (SANTA RITA)',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'CARACOL',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'FEBRES CORDERO (LAS JUNTAS)',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'PIMOCHA',
            'canton_id' => 122,
        ]);
        Parish::create([
            'name' => 'LA UNIÓN',
            'canton_id' => 122,
        ]);
        #endregion

        #region BABA
        Parish::create([
            'name' => 'BABA',
            'canton_id' => 123,
        ]);
        Parish::create([
            'name' => 'GUARE',
            'canton_id' => 123,
        ]);
        Parish::create([
            'name' => 'ISLA DE BEJUCAL',
            'canton_id' => 123,
        ]);
        #endregion

        #region MONTALVO
        Parish::create([
            'name' => 'MONTALVO',
            'canton_id' => 124,
        ]);
        #endregion

        #region PUEBLOVIEJO
        Parish::create([
            'name' => 'PUEBLOVIEJO',
            'canton_id' => 125,
        ]);
        Parish::create([
            'name' => 'PUERTO PECHICHE',
            'canton_id' => 125,
        ]);
        Parish::create([
            'name' => 'SAN JUAN',
            'canton_id' => 125,
        ]);
        #endregion

        #region QUEVEDO
        Parish::create([
            'name' => 'QUEVEDO',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'SAN CAMILO',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'GUAYACÁN',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'NICOLÁS INFANTE DÍAZ',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'SAN CRISTÓBAL',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'SIETE DE OCTUBRE',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => '24 DE MAYO',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'VENUS DEL RÍO QUEVEDO',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'VIVA ALFARO',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'QUEVEDO',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'BUENA FÉ',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'MOCACHE',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'SAN CARLOS',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'VALENCIA',
            'canton_id' => 126,
        ]);
        Parish::create([
            'name' => 'LA ESPERANZA',
            'canton_id' => 126,
        ]);
        #endregion

        #region URDANETA
        Parish::create([
            'name' => 'CATARAMA',
            'canton_id' => 127,
        ]);
        Parish::create([
            'name' => 'RICAURTE',
            'canton_id' => 127,
        ]);
        #endregion

        #region VENTANAS
        Parish::create([
            'name' => '10 DE NOVIEMBRE',
            'canton_id' => 128,
        ]);
        Parish::create([
            'name' => 'VENTANAS',
            'canton_id' => 128,
        ]);
        Parish::create([
            'name' => 'QUINSALOMA',
            'canton_id' => 128,
        ]);
        Parish::create([
            'name' => 'ZAPOTAL',
            'canton_id' => 128,
        ]);
        Parish::create([
            'name' => 'CHACARITA',
            'canton_id' => 128,
        ]);
        Parish::create([
            'name' => 'LOS ÁNGELES',
            'canton_id' => 128,
        ]);
        #endregion

        #region VINCES
        Parish::create([
            'name' => 'VÍNCES',
            'canton_id' => 129,
        ]);
        Parish::create([
            'name' => 'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)',
            'canton_id' => 129,
        ]);
        Parish::create([
            'name' => 'PALENQUE',
            'canton_id' => 129,
        ]);
        #endregion

        #region PALENQUE
        Parish::create([
            'name' => 'PALENQUE',
            'canton_id' => 130,
        ]);
        #endregion

        #region BUENA FÉ
        Parish::create([
            'name' => 'SAN JACINTO DE BUENA FÉ',
            'canton_id' => 131,
        ]);
        Parish::create([
            'name' => '7 DE AGOSTO',
            'canton_id' => 131,
        ]);
        Parish::create([
            'name' => '11 DE OCTUBRE',
            'canton_id' => 131,
        ]);
        Parish::create([
            'name' => 'SAN JACINTO DE BUENA FÉ',
            'canton_id' => 131,
        ]);
        Parish::create([
            'name' => 'PATRICIA PILAR',
            'canton_id' => 131,
        ]);
        #endregion

        #region VALENCIA
        Parish::create([
            'name' => 'VALENCIA',
            'canton_id' => 132,
        ]);
        #endregion

        #region MOCACHE
        Parish::create([
            'name' => 'MOCACHE',
            'canton_id' => 133,
        ]);
        #endregion

        #region QUINSALOMA
        Parish::create([
            'name' => 'QUINSALOMA',
            'canton_id' => 134,
        ]);
        #endregion

        #region PORTOVIEJO-MANABI
        Parish::create([
            'name' => 'PORTOVIEJO',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => '12 DE MARZO',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'COLÓN',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'PICOAZÁ',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'SAN PABLO',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'ANDRÉS DE VERA',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'FRANCISCO PACHECO',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => '18 DE OCTUBRE',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'SIMÓN BOLÍVAR',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'ABDÓN CALDERÓN (SAN FRANCISCO)',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'ALHAJUELA (BAJO GRANDE)',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'CRUCITA',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'PUEBLO NUEVO',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'RIOCHICO (RÍO CHICO)',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'SAN PLÁCIDO',
            'canton_id' => 135,
        ]);
        Parish::create([
            'name' => 'CHIRIJOS',
            'canton_id' => 135,
        ]);
        #endregion

        #region BOLÍVAR
        Parish::create([
            'name' => 'CALCETA',
            'canton_id' => 136,
        ]);
        Parish::create([
            'name' => 'MEMBRILLO',
            'canton_id' => 136,
        ]);
        Parish::create([
            'name' => 'QUIROGA',
            'canton_id' => 136,
        ]);
        #endregion

        #region CHONE
        Parish::create([
            'name' => 'CHONE',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'SANTA RITA',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'BOYACÁ',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'CANUTO',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'CONVENTO',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'CHIBUNGA',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'ELOY ALFARO',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'RICAURTE',
            'canton_id' => 137,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO',
            'canton_id' => 137,
        ]);
        #endregion

        #region EL CARMEN
        Parish::create([
            'name' => 'EL CARMEN',
            'canton_id' => 138,
        ]);
        Parish::create([
            'name' => '4 DE DICIEMBRE',
            'canton_id' => 138,
        ]);
        Parish::create([
            'name' => 'WILFRIDO LOOR MOREIRA (MAICITO)',
            'canton_id' => 138,
        ]);
        Parish::create([
            'name' => 'SAN PEDRO DE SUMA',
            'canton_id' => 138,
        ]);
        #endregion

        #region FLAVIO ALFARO
        Parish::create([
            'name' => 'FLAVIO ALFARO',
            'canton_id' => 139,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DE NOVILLO ',
            'canton_id' => 139,
        ]);
        Parish::create([
            'name' => 'ZAPALLO',
            'canton_id' => 139,
        ]);
        #endregion

        #region JIPIJAPA
        Parish::create([
            'name' => 'DR. MIGUEL MORÁN LUCIO',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'MANUEL INOCENCIO PARRALES Y GUALE',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'SAN LORENZO DE JIPIJAPA',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'JIPIJAPA',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'AMÉRICA',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'EL ANEGADO (CAB. EN ELOY ALFARO)',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'JULCUY',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'LA UNIÓN',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'MACHALILLA',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'MEMBRILLAL',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'PEDRO PABLO GÓMEZ',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'PUERTO DE CAYO',
            'canton_id' => 140,
        ]);
        Parish::create([
            'name' => 'PUERTO LÓPEZ',
            'canton_id' => 140,
        ]);
        #endregion

        #region JUNÍN
        Parish::create([
            'name' => 'JUNÍN',
            'canton_id' => 141,
        ]);
        #endregion

        #region MANTA
        Parish::create([
            'name' => 'LOS ESTEROS',
            'canton_id' => 142,
        ]);
        Parish::create([
            'name' => 'MANTA',
            'canton_id' => 142,
        ]);
        Parish::create([
            'name' => 'SAN MATEO',
            'canton_id' => 142,
        ]);
        Parish::create([
            'name' => 'TARQUI',
            'canton_id' => 142,
        ]);
        Parish::create([
            'name' => 'ELOY ALFARO',
            'canton_id' => 142,
        ]);
        Parish::create([
            'name' => 'SAN LORENZO',
            'canton_id' => 142,
        ]);
        Parish::create([
            'name' => 'SANTA MARIANITA (BOCA DE PACOCHE)',
            'canton_id' => 142,
        ]);
        #endregion

        #region MONTECRISTI
        Parish::create([
            'name' => 'ANIBAL SAN ANDRÉS',
            'canton_id' => 143,
        ]);
        Parish::create([
            'name' => 'MONTECRISTI',
            'canton_id' => 143,
        ]);
        Parish::create([
            'name' => 'EL COLORADO',
            'canton_id' => 143,
        ]);
        Parish::create([
            'name' => 'GENERAL ELOY ALFARO',
            'canton_id' => 143,
        ]);
        Parish::create([
            'name' => 'LEONIDAS PROAÑO',
            'canton_id' => 143,
        ]);
        Parish::create([
            'name' => 'JARAMIJÓ',
            'canton_id' => 143,
        ]);
        Parish::create([
            'name' => 'LA PILA',
            'canton_id' => 143,
        ]);
        #endregion

        #region PAJÁN
        Parish::create([
            'name' => 'PAJÁN ',
            'canton_id' => 144,
        ]);
        Parish::create([
            'name' => 'CAMPOZANO (LA PALMA DE PAJÁN)',
            'canton_id' => 144,
        ]);
        Parish::create([
            'name' => 'CASCOL',
            'canton_id' => 144,
        ]);
        Parish::create([
            'name' => 'GUALE',
            'canton_id' => 144,
        ]);
        Parish::create([
            'name' => 'LASCANO',
            'canton_id' => 144,
        ]);
        #endregion

        #region PICHINCHA
        Parish::create([
            'name' => 'PICHINCHA',
            'canton_id' => 145,
        ]);
        Parish::create([
            'name' => 'BARRAGANETE',
            'canton_id' => 145,
        ]);
        Parish::create([
            'name' => 'SAN SEBASTIÁN',
            'canton_id' => 145,
        ]);
        #endregion

        #region ROCAFUERTE
        Parish::create([
            'name' => 'ROCAFUERTE',
            'canton_id' => 146,
        ]);
        #endregion

        #region SANTA ANA
        Parish::create([
            'name' => 'SANTA ANA',
            'canton_id' => 147,
        ]);
        Parish::create([
            'name' => 'LODANA',
            'canton_id' => 147,
        ]);
        Parish::create([
            'name' => 'SANTA ANA DE VUELTA LARGA',
            'canton_id' => 147,
        ]);
        Parish::create([
            'name' => 'AYACUCHO',
            'canton_id' => 147,
        ]);
        Parish::create([
            'name' => 'HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)',
            'canton_id' => 147,
        ]);
        Parish::create([
            'name' => 'LA UNIÓN',
            'canton_id' => 147,
        ]);
        Parish::create([
            'name' => 'OLMEDO',
            'canton_id' => 147,
        ]);
        Parish::create([
            'name' => 'SAN PABLO (CAB. EN PUEBLO NUEVO)',
            'canton_id' => 147,
        ]);
        #endregion

        #region SUCRE
        Parish::create([
            'name' => 'BAHÍA DE CARÁQUEZ',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'LEONIDAS PLAZA GUTIÉRREZ',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'CANOA',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'COJIMÍES',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'CHARAPOTÓ',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => '10 DE AGOSTO',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'JAMA',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'PEDERNALES',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'SAN ISIDRO',
            'canton_id' => 148,
        ]);
        Parish::create([
            'name' => 'SAN VICENTE',
            'canton_id' => 148,
        ]);
        #endregion

        #region TOSAGUA
        Parish::create([
            'name' => 'TOSAGUA',
            'canton_id' => 149,
        ]);
        Parish::create([
            'name' => 'BACHILLERO',
            'canton_id' => 149,
        ]);
        Parish::create([
            'name' => 'ANGEL PEDRO GILER (LA ESTANCILLA)',
            'canton_id' => 149,
        ]);
        #endregion

        #region 24 DE MAYO
        Parish::create([
            'name' => 'SUCRE',
            'canton_id' => 150,
        ]);
        Parish::create([
            'name' => 'BELLAVISTA',
            'canton_id' => 150,
        ]);
        Parish::create([
            'name' => 'NOBOA',
            'canton_id' => 150,
        ]);
        Parish::create([
            'name' => 'ARQ. SIXTO DURÁN BALLÉN',
            'canton_id' => 150,
        ]);
        #endregion

        #region PEDERNALES
        Parish::create([
            'name' => 'PEDERNALES',
            'canton_id' => 151,
        ]);
        Parish::create([
            'name' => 'COJIMÍES',
            'canton_id' => 151,
        ]);
        Parish::create([
            'name' => '10 DE AGOSTO',
            'canton_id' => 151,
        ]);
        Parish::create([
            'name' => 'ATAHUALPA',
            'canton_id' => 151,
        ]);
        #endregion

        #region OLMEDO
        Parish::create([
            'name' => 'OLMEDO',
            'canton_id' => 152,
        ]);
        #endregion

        #region PUERTO LÓPEZ
        Parish::create([
            'name' => 'PUERTO LÓPEZ',
            'canton_id' => 153,
        ]);
        Parish::create([
            'name' => 'MACHALILLA',
            'canton_id' => 153,
        ]);
        Parish::create([
            'name' => 'SALANGO',
            'canton_id' => 153,
        ]);
        #endregion

        #region JAMA
        Parish::create([
            'name' => 'JAMA',
            'canton_id' => 154,
        ]);
        #endregion

        #region JARAMIJÓ
        Parish::create([
            'name' => 'JARAMIJÓ',
            'canton_id' => 155,
        ]);
        #endregion

        #region SAN VICENTE
        Parish::create([
            'name' => 'SAN VICENTE',
            'canton_id' => 156,
        ]);
        Parish::create([
            'name' => 'CANOA',
            'canton_id' => 156,
        ]);
        #endregion

        #region MORONA-MORONA SANTIAGO
        Parish::create([
            'name' => 'MACAS',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'ALSHI (CAB. EN 9 DE OCTUBRE)',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'CHIGUAZA',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'GENERAL PROAÑO',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'HUASAGA (CAB.EN WAMPUIK)',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'MACUMA',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'SAN ISIDRO',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'SEVILLA DON BOSCO',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'SINAÍ',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'TAISHA',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'ZUÑA (ZÚÑAC)',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'TUUTINENTZA',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'CUCHAENTZA',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE MORONA',
            'canton_id' => 157,
        ]);
        Parish::create([
            'name' => 'RÍO BLANCO',
            'canton_id' => 157,
        ]);
        #endregion

        #region GUALAQUIZA
        Parish::create([
            'name' => 'GUALAQUIZA',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'MERCEDES MOLINA',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'AMAZONAS (ROSARIO DE CUYES)',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'BERMEJOS',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'BOMBOIZA',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'CHIGÜINDA',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'EL ROSARIO',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'NUEVA TARQUI',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'SAN MIGUEL DE CUYES',
            'canton_id' => 158,
        ]);
        Parish::create([
            'name' => 'EL IDEAL',
            'canton_id' => 158,
        ]);
        #endregion

        #region LIMÓN INDANZA
        Parish::create([
            'name' => 'GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'INDANZA',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'PAN DE AZÚCAR',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO)',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'SAN CARLOS DE LIMÓN',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'SAN JUAN BOSCO',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'SAN MIGUEL DE CONCHAY',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'YUNGANZA (CAB. EN EL ROSARIO)',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'PALORA ',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'PALORA (METZERA)',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'ARAPICOS',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'HUAMBOYA',
            'canton_id' => 159,
        ]);
        Parish::create([
            'name' => 'SANGAY (CAB. EN NAYAMANACA)',
            'canton_id' => 159,
        ]);
        #endregion

        #region SANTIAGO
        Parish::create([
            'name' => 'SANTIAGO DE MÉNDEZ',
            'canton_id' => 160,
        ]);
        Parish::create([
            'name' => 'COPAL',
            'canton_id' => 160,
        ]);
        Parish::create([
            'name' => 'CHUPIANZA',
            'canton_id' => 160,
        ]);
        Parish::create([
            'name' => 'GO PATUCA',
            'canton_id' => 160,
        ]);
        Parish::create([
            'name' => 'SAN LUIS DE EL ACHO (CAB. EN EL ACHO)',
            'canton_id' => 160,
        ]);
        Parish::create([
            'name' => 'SANTIAGO',
            'canton_id' => 160,
        ]);
        Parish::create([
            'name' => 'TAYUZA',
            'canton_id' => 160,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DE CHINIMBIMI',
            'canton_id' => 160,
        ]);
        #endregion

        #region SUCUA
        Parish::create([
            'name' => 'SUCÚA',
            'canton_id' => 161,
        ]);
        Parish::create([
            'name' => 'ASUNCIÓN',
            'canton_id' => 161,
        ]);
        Parish::create([
            'name' => 'HUAMBI',
            'canton_id' => 161,
        ]);
        Parish::create([
            'name' => 'LOGROÑO',
            'canton_id' => 161,
        ]);
        Parish::create([
            'name' => 'YAUPI',
            'canton_id' => 161,
        ]);
        Parish::create([
            'name' => 'SANTA MARIANITA DE JESÚS',
            'canton_id' => 161,
        ]);
        #endregion

        #region HUAMBOYA
        Parish::create([
            'name' => 'HUAMBOYA',
            'canton_id' => 162,
        ]);
        Parish::create([
            'name' => 'CHIGUAZA',
            'canton_id' => 162,
        ]);
        Parish::create([
            'name' => 'PABLO SEXTO',
            'canton_id' => 162,
        ]);
        #endregion

        #region SAN JUAN BOSCO
        Parish::create([
            'name' => 'SAN JUAN BOSCO',
            'canton_id' => 163,
        ]);
        Parish::create([
            'name' => 'PAN DE AZÚCAR',
            'canton_id' => 163,
        ]);
        Parish::create([
            'name' => 'SAN CARLOS DE LIMÓN',
            'canton_id' => 163,
        ]);
        Parish::create([
            'name' => 'SAN JACINTO DE WAKAMBEIS',
            'canton_id' => 163,
        ]);
        Parish::create([
            'name' => 'SANTIAGO DE PANANZA',
            'canton_id' => 163,
        ]);
        #endregion

        #region TAISHA
        Parish::create([
            'name' => 'TAISHA',
            'canton_id' => 164,
        ]);
        Parish::create([
            'name' => 'HUASAGA (CAB. EN WAMPUIK)',
            'canton_id' => 164,
        ]);
        Parish::create([
            'name' => 'MACUMA',
            'canton_id' => 164,
        ]);
        Parish::create([
            'name' => 'TUUTINENTZA',
            'canton_id' => 164,
        ]);
        Parish::create([
            'name' => 'PUMPUENTSA',
            'canton_id' => 164,
        ]);
        #endregion

        #region LOGROÑO
        Parish::create([
            'name' => 'LOGROÑO',
            'canton_id' => 165,
        ]);
        Parish::create([
            'name' => 'YAUPI',
            'canton_id' => 165,
        ]);
        Parish::create([
            'name' => 'SHIMPIS',
            'canton_id' => 165,
        ]);
        #endregion

        #region PABLO SEXTO
        Parish::create([
            'name' => 'PABLO SEXTO',
            'canton_id' => 166,
        ]);
        #endregion

        #region TIWINTZA
        Parish::create([
            'name' => 'SANTIAGO',
            'canton_id' => 167,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE MORONA',
            'canton_id' => 167,
        ]);
        #endregion

        #region TENA- NAPO
        Parish::create([
            'name' => 'TENA',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'AHUANO',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'CHONTAPUNTA',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'PANO',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'PUERTO MISAHUALLI',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'PUERTO NAPO',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'TÁLAG',
            'canton_id' => 168,
        ]);
        Parish::create([
            'name' => 'SAN JUAN DE MUYUNA',
            'canton_id' => 168,
        ]);
        #endregion

        #region ARCHIDONA
        Parish::create([
            'name' => 'ARCHIDONA',
            'canton_id' => 169,
        ]);
        Parish::create([
            'name' => 'AVILA',
            'canton_id' => 169,
        ]);
        Parish::create([
            'name' => 'COTUNDO',
            'canton_id' => 169,
        ]);
        Parish::create([
            'name' => 'LORETO',
            'canton_id' => 169,
        ]);
        Parish::create([
            'name' => 'SAN PABLO DE USHPAYACU',
            'canton_id' => 169,
        ]);
        Parish::create([
            'name' => 'PUERTO MURIALDO',
            'canton_id' => 169,
        ]);
        #endregion

        #region EL CHACO
        Parish::create([
            'name' => 'EL CHACO',
            'canton_id' => 170,
        ]);
        Parish::create([
            'name' => 'GONZALO DíAZ DE PINEDA (EL BOMBÓN)',
            'canton_id' => 170,
        ]);
        Parish::create([
            'name' => 'LINARES',
            'canton_id' => 170,
        ]);
        Parish::create([
            'name' => 'OYACACHI',
            'canton_id' => 170,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA',
            'canton_id' => 170,
        ]);
        Parish::create([
            'name' => 'SARDINAS',
            'canton_id' => 170,
        ]);
        #endregion

        #region QUIJOS
        Parish::create([
            'name' => 'BAEZA',
            'canton_id' => 171,
        ]);
        Parish::create([
            'name' => 'COSANGA',
            'canton_id' => 171,
        ]);
        Parish::create([
            'name' => 'CUYUJA',
            'canton_id' => 171,
        ]);
        Parish::create([
            'name' => 'PAPALLACTA',
            'canton_id' => 171,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)',
            'canton_id' => 171,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DEL PAYAMINO',
            'canton_id' => 171,
        ]);
        Parish::create([
            'name' => 'SUMACO',
            'canton_id' => 171,
        ]);
        #endregion

        #region CARLOS JULIO AROSEMENA TOLA
        Parish::create([
            'name' => 'CARLOS JULIO AROSEMENA TOLA',
            'canton_id' => 172,
        ]);
        #endregion

        #region PASTAZA-PASTAZA
        Parish::create([
            'name' => 'PUYO',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'ARAJUNO',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'CANELOS',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'CURARAY',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'DIEZ DE AGOSTO',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'FÁTIMA',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'MONTALVO (ANDOAS)',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'POMONA',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'RÍO CORRIENTES',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'RÍO TIGRE',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'SANTA CLARA',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'SARAYACU',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'TARQUI',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'TENIENTE HUGO ORTIZ',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)',
            'canton_id' => 173,
        ]);
        Parish::create([
            'name' => 'EL TRIUNFO',
            'canton_id' => 173,
        ]);
        #endregion

        #region MERA
        Parish::create([
            'name' => 'MERA',
            'canton_id' => 174,
        ]);
        Parish::create([
            'name' => 'MADRE TIERRA',
            'canton_id' => 174,
        ]);
        Parish::create([
            'name' => 'SHELL',
            'canton_id' => 174,
        ]);
        #endregion

        #region SANTA CLARA
        Parish::create([
            'name' => 'SANTA CLARA',
            'canton_id' => 175,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ',
            'canton_id' => 175,
        ]);
        #endregion

        #region ARAJUNO
        Parish::create([
            'name' => 'ARAJUNO',
            'canton_id' => 176,
        ]);
        Parish::create([
            'name' => 'CURARAY',
            'canton_id' => 176,
        ]);
        #endregion

        #region QUITO-PICHINCHA
        Parish::create([
            'name' => 'BELISARIO QUEVEDO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CARCELÉN',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CENTRO HISTÓRICO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'COCHAPAMBA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'COMITÉ DEL PUEBLO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'COTOCOLLAO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CHILIBULO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CHILLOGALLO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CHIMBACALLE',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'EL CONDADO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'GUAMANÍ',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'IÑAQUITO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'ITCHIMBÍA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'JIPIJAPA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'KENNEDY',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LA ARGELIA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LA CONCEPCIÓN',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LA ECUATORIANA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LA FERROVIARIA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LA LIBERTAD',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LA MAGDALENA',
            'canton_id' => 177,
        ]);
        Parish::create([
        'name' => 'LA MENA',
        'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'MARISCAL SUCRE',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PONCEANO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PUENGASÍ',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'QUITUMBE',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'RUMIPAMBA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'SAN BARTOLO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'SAN ISIDRO DEL INCA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'SAN JUAN',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'SOLANDA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'TURUBAMBA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'QUITO DISTRITO METROPOLITANO',
            'canton_id' => 177,
        ]);
        Parish::create([
        'name' => 'ALANGASÍ',
        'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'AMAGUAÑA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'ATAHUALPA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CALACALÍ',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CALDERÓN',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CONOCOTO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CUMBAYÁ',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CHAVEZPAMBA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'CHECA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'EL QUINCHE',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'GUALEA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'GUANGOPOLO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'GUAYLLABAMBA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LA MERCED',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LLANO CHICO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'LLOA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'MINDO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'NANEGAL',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'NANEGALITO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'NAYÓN',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'NONO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PACTO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PEDRO VICENTE MALDONADO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PERUCHO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PIFO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PÍNTAG',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'POMASQUI',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PUÉLLARO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PUEMBO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'SAN ANTONIO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE MINAS',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'SAN MIGUEL DE LOS BANCOS',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'TABABELA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => '17 PICHINCHA QUITO TUMBACO',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'YARUQUÍ',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'ZAMBIZA',
            'canton_id' => 177,
        ]);
        Parish::create([
            'name' => 'PUERTO QUITO',
            'canton_id' => 177,
        ]);
        #endregion

        #region CAYAMBE
        Parish::create([
            'name' => 'AYORA',
            'canton_id' => 178,
        ]);
        Parish::create([
            'name' => 'CAYAMBE',
            'canton_id' => 178,
        ]);
        Parish::create([
            'name' => 'JUAN MONTALVO',
            'canton_id' => 178,
        ]);
        Parish::create([
            'name' => 'ASCÁZUBI',
            'canton_id' => 178,
        ]);
        Parish::create([
            'name' => 'CANGAHUA',
            'canton_id' => 178,
        ]);
        Parish::create([
            'name' => 'OLMEDO (PESILLO)',
            'canton_id' => 178,
        ]);
        Parish::create([
            'name' => 'OTÓN',
            'canton_id' => 178,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA DE CUSUBAMBA',
            'canton_id' => 178,
        ]);
        #endregion

        #region MEJIA
        Parish::create([
            'name' => 'MACHACHI',
            'canton_id' => 179,
        ]);
        Parish::create([
            'name' => 'ALÓAG',
            'canton_id' => 179,
        ]);
        Parish::create([
            'name' => 'ALOASÍ',
            'canton_id' => 179,
        ]);
        Parish::create([
            'name' => 'CUTUGLAHUA',
            'canton_id' => 179,
        ]);
        Parish::create([
            'name' => 'EL CHAUPI',
            'canton_id' => 179,
        ]);
        Parish::create([
            'name' => 'MANUEL CORNEJO ASTORGA (TANDAPI)',
            'canton_id' => 179,
        ]);
        Parish::create([
            'name' => 'TAMBILLO',
            'canton_id' => 179,
        ]);
        Parish::create([
            'name' => 'UYUMBICHO',
            'canton_id' => 179,
        ]);
        #endregion

        #region PEDRO MONCAYO
        Parish::create([
            'name' => 'TABACUNDO',
            'canton_id' => 180,
        ]);
        Parish::create([
            'name' => 'LA ESPERANZA',
            'canton_id' => 180,
        ]);
        Parish::create([
            'name' => 'MALCHINGUÍ',
            'canton_id' => 180,
        ]);
        Parish::create([
            'name' => 'TOCACHI',
            'canton_id' => 180,
        ]);
        Parish::create([
            'name' => 'TUPIGACHI',
            'canton_id' => 180,
        ]);
        #endregion

        #region RUMIÑAHUI
        Parish::create([
            'name' => 'SANGOLQUÍ',
            'canton_id' => 181,
        ]);
        Parish::create([
            'name' => 'SAN PEDRO DE TABOADA',
            'canton_id' => 181,
        ]);
        Parish::create([
            'name' => 'SAN RAFAEL',
            'canton_id' => 181,
        ]);
        Parish::create([
            'name' => 'SANGOLQUI',
            'canton_id' => 181,
        ]);
        Parish::create([
            'name' => 'COTOGCHOA',
            'canton_id' => 181,
        ]);
        Parish::create([
            'name' => 'RUMIPAMBA',
            'canton_id' => 181,
        ]);
        #endregion

        #region SAN MIGUEL DE LOS BANCOS
        Parish::create([
            'name' => 'SAN MIGUEL DE LOS BANCOS',
            'canton_id' => 182,
        ]);
        Parish::create([
            'name' => 'MINDO',
            'canton_id' => 182,
        ]);
        Parish::create([
            'name' => 'PEDRO VICENTE MALDONADO',
            'canton_id' => 182,
        ]);
        Parish::create([
            'name' => 'PUERTO QUITO',
            'canton_id' => 182,
        ]);
        #endregion

        #region  PEDRO VICENTE MALDONADO
        Parish::create([
            'name' => ' PEDRO VICENTE MALDONADO',
            'canton_id' => 183,
        ]);
        #endregion

        #region PUERTO QUITO
        Parish::create([
            'name' => 'PUERTO QUITO',
            'canton_id' => 184,
        ]);
        #endregion

        #region AMBATO-TUNGURAHUA
        Parish::create([
            'name' => 'ATOCHA – FICOA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'CELIANO MONGE',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'HUACHI CHICO',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'HUACHI LORETO',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'LA MERCED',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'LA PENÍNSULA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'MATRIZ',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'PISHILATA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'AMBATO',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'AMBATILLO',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'ATAHUALPA (CHISALATA)',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'AUGUSTO N. MARTÍNEZ (MUNDUGLEO)',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'HUACHI GRANDE',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'IZAMBA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'JUAN BENIGNO VELA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'MONTALVO',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'PASA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'PICAIGUA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'PILAGÜÍN (PILAHÜÍN)',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'QUISAPINCHA (QUIZAPINCHA)',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'SAN BARTOLOMÉ DE PINLLOG',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'SAN FERNANDO (PASA SAN FERNANDO)',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'TOTORAS',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'CUNCHIBAMBA',
            'canton_id' => 185,
        ]);
        Parish::create([
            'name' => 'UNAMUNCHO',
            'canton_id' => 185,
        ]);
        #endregion

        #region BAÑOS DE AGUA SANTA
        Parish::create([
            'name' => 'BAÑOS DE AGUA SANTA',
            'canton_id' => 186,
        ]);
        Parish::create([
            'name' => 'SANTA LLIGUA',
            'canton_id' => 186,
        ]);
        Parish::create([
            'name' => 'SANTA RÍO NEGRO',
            'canton_id' => 186,
        ]);
        Parish::create([
            'name' => 'SANTA RÍO VERDE',
            'canton_id' => 186,
        ]);
        Parish::create([
            'name' => 'SANTA ULBA',
            'canton_id' => 186,
        ]);
        #endregion

        #region CEVALLOS
        Parish::create([
            'name' => 'CEVALLOS',
            'canton_id' => 187,
        ]);
        #endregion

        #region MOCHA
        Parish::create([
            'name' => 'MOCHA',
            'canton_id' => 188,
        ]);
        Parish::create([
            'name' => 'PINGUILÍ',
            'canton_id' => 188,
        ]);
        #endregion

        #region PATATE
        Parish::create([
            'name' => 'PATATE',
            'canton_id' => 189,
        ]);
        Parish::create([
            'name' => 'EL TRIUNFO',
            'canton_id' => 189,
        ]);
        Parish::create([
            'name' => 'LOS ANDES (CAB. EN POATUG)',
            'canton_id' => 189,
        ]);
        Parish::create([
            'name' => 'SUCRE (CAB. EN SUCRE-PATATE URCU)',
            'canton_id' => 189,
        ]);
        #endregion

        #region QUERO
        Parish::create([
            'name' => 'QUERO',
            'canton_id' => 190,
        ]);
        Parish::create([
            'name' => 'RUMIPAMBA',
            'canton_id' => 190,
        ]);
        Parish::create([
            'name' => 'YANAYACU - MOCHAPATA (CAB. EN YANAYACU)',
            'canton_id' => 190,
        ]);
        #endregion

        #region SAN PEDRO DE PELILEO
        Parish::create([
            'name' => 'PELILEO',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'PELILEO GRANDE',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'BENÍTEZ (PACHANLICA)',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'BOLÍVAR',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'COTALÓ',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'CHIQUICHA (CAB. EN CHIQUICHA GRANDE)',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'EL ROSARIO (RUMICHACA)',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'GARCÍA MORENO (CHUMAQUI)',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'GUAMBALÓ (HUAMBALÓ)',
            'canton_id' => 191,
        ]);
        Parish::create([
            'name' => 'SALASACA',
            'canton_id' => 191,
        ]);
        #endregion

        #region SANTIAGO DE PÍLLARO
        Parish::create([
            'name' => 'CIUDAD NUEVA',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'PÍLLARO',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'BAQUERIZO MORENO',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'EMILIO MARÍA TERÁN (RUMIPAMBA)',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'MARCOS ESPINEL (CHACATA)',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'SAN ANDRÉS',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE POALÓ',
            'canton_id' => 192,
        ]);
        Parish::create([
            'name' => 'SAN MIGUELITO',
            'canton_id' => 192,
        ]);
        #endregion

        #region TISALEO
        Parish::create([
            'name' => 'TISALEO',
            'canton_id' => 193,
        ]);
        Parish::create([
            'name' => 'QUINCHICOTO',
            'canton_id' => 193,
        ]);
        #endregion

        #region ZAMORA-ZAMORA CHINCHIPE
        Parish::create([
            'name' => 'EL LIMÓN',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'ZAMORA',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'CUMBARATZA',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'GUADALUPE',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'IMBANA (LA VICTORIA DE IMBANA)',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'PAQUISHA',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'SABANILLA',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'TIMBARA',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'ZUMBI',
            'canton_id' => 194,
        ]);
        Parish::create([
            'name' => 'SAN CARLOS DE LAS MINAS',
            'canton_id' => 194,
        ]);
        #endregion

        #region CHINCHIPE
        Parish::create([
            'name' => 'ZUMBA',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'CHITO',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'EL CHORRO',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'EL PORVENIR DEL CARMEN',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'LA CHONTA',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'PALANDA',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'PUCAPAMBA',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DEL VERGEL',
            'canton_id' => 195,
        ]);
        Parish::create([
            'name' => 'SAN ANDRÉS',
            'canton_id' => 195,
        ]);
        #endregion

        #region NANGARITZA
        Parish::create([
            'name' => 'GUAYZIMI',
            'canton_id' => 196,
        ]);
        Parish::create([
            'name' => 'ZURMI',
            'canton_id' => 196,
        ]);
        Parish::create([
            'name' => 'NUEVO PARAÍSO',
            'canton_id' => 196,
        ]);
        #endregion

        #region YACUAMBI
        Parish::create([
            'name' => '28 DE MAYO (SAN JOSÉ DE YACUAMBI)',
            'canton_id' => 197,
        ]);
        Parish::create([
            'name' => 'LA PAZ',
            'canton_id' => 197,
        ]);
        Parish::create([
            'name' => 'TUTUPALI',
            'canton_id' => 197,
        ]);
        #endregion

        #region YANTZAZA (YANZATZA)
        Parish::create([
            'name' => 'YANTZAZA (YANZATZA)',
            'canton_id' => 198,
        ]);
        Parish::create([
            'name' => 'CHICAÑA',
            'canton_id' => 198,
        ]);
        Parish::create([
            'name' => 'EL PANGUI',
            'canton_id' => 198,
        ]);
        Parish::create([
            'name' => 'LOS ENCUENTROS',
            'canton_id' => 198,
        ]);
        #endregion

        #region EL PANGUI
        Parish::create([
            'name' => 'EL PANGUI',
            'canton_id' => 199,
        ]);
        Parish::create([
            'name' => 'EL GUISME',
            'canton_id' => 199,
        ]);
        Parish::create([
            'name' => 'PACHICUTZA',
            'canton_id' => 199,
        ]);
        Parish::create([
            'name' => 'TUNDAYME',
            'canton_id' => 199,
        ]);
        #endregion

        #region CENTINELA DEL CÓNDOR
        Parish::create([
            'name' => 'ZUMBI',
            'canton_id' => 200,
        ]);
        Parish::create([
            'name' => 'PAQUISHA',
            'canton_id' => 200,
        ]);
        Parish::create([
            'name' => 'TRIUNFO-DORADO',
            'canton_id' => 200,
        ]);
        Parish::create([
            'name' => 'PANGUINTZA',
            'canton_id' => 200,
        ]);
        #endregion

        #region PALANDA
        Parish::create([
            'name' => 'PALANDA',
            'canton_id' => 201,
        ]);
        Parish::create([
            'name' => 'EL PORVENIR DEL CARMEN',
            'canton_id' => 201,
        ]);
        Parish::create([
            'name' => 'SAN FRANCISCO DEL VERGEL',
            'canton_id' => 201,
        ]);
        Parish::create([
            'name' => 'VALLADOLID',
            'canton_id' => 201,
        ]);
        Parish::create([
            'name' => 'LA CANELA',
            'canton_id' => 201,
        ]);
        #endregion

        #region PAQUISHA
        Parish::create([
            'name' => 'PAQUISHA',
            'canton_id' => 202,
        ]);
        Parish::create([
            'name' => 'BELLAVISTA',
            'canton_id' => 202,
        ]);
        Parish::create([
            'name' => 'NUEVO QUITO',
            'canton_id' => 202,
        ]);
        #endregion

        #region SAN CRISTÓBAL
        Parish::create([
            'name' => 'PUERTO BAQUERIZO MORENO',
            'canton_id' => 203,
        ]);
        Parish::create([
            'name' => 'EL PROGRESO',
            'canton_id' => 203,
        ]);
        Parish::create([
            'name' => 'ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)',
            'canton_id' => 203,
        ]);
        #endregion

        #region ISABELA
        Parish::create([
            'name' => 'PUERTO VILLAMIL',
            'canton_id' => 204,
        ]);
        Parish::create([
            'name' => 'TOMÁS DE BERLANGA (SANTO TOMÁS)',
            'canton_id' => 204,
        ]);
        #endregion

        #region SANTA CRUZ
        Parish::create([
            'name' => 'PUERTO AYORA',
            'canton_id' => 205,
        ]);
        Parish::create([
            'name' => 'BELLAVISTA',
            'canton_id' => 205,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA (INCLUYE LA ISLA BALTRA)',
            'canton_id' => 205,
        ]);
        #endregion

        #region LAGO AGRIO
        Parish::create([
            'name' => 'NUEVA LOJA',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'CUYABENO',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'DURENO',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'GENERAL FARFÁN',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'TARAPOA',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'EL ENO',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'PACAYACU',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'JAMBELÍ',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'SANTA CECILIA',
            'canton_id' => 206,
        ]);
        Parish::create([
            'name' => 'AGUAS NEGRAS',
            'canton_id' => 206,
        ]);
        #endregion

        #region GONZALO PIZARRO
        Parish::create([
            'name' => 'EL DORADO DE CASCALES',
            'canton_id' => 207,
        ]);
        Parish::create([
            'name' => 'EL REVENTADOR',
            'canton_id' => 207,
        ]);
        Parish::create([
            'name' => 'GONZALO PIZARRO',
            'canton_id' => 207,
        ]);
        Parish::create([
            'name' => 'LUMBAQUÍ',
            'canton_id' => 207,
        ]);
        Parish::create([
            'name' => 'PUERTO LIBRE',
            'canton_id' => 207,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA DE SUCUMBÍOS',
            'canton_id' => 207,
        ]);
        #endregion

        #region PUTUMAYO
        Parish::create([
            'name' => 'PUERTO EL CARMEN DEL PUTUMAYO',
            'canton_id' => 208,
        ]);
        Parish::create([
            'name' => 'PALMA ROJA',
            'canton_id' => 208,
        ]);
        Parish::create([
            'name' => 'PUERTO BOLÍVAR (PUERTO MONTÚFAR)',
            'canton_id' => 208,
        ]);
        Parish::create([
            'name' => 'PUERTO RODRÍGUEZ',
            'canton_id' => 208,
        ]);
        Parish::create([
            'name' => 'SANTA ELENA',
            'canton_id' => 208,
        ]);
        #endregion

        #region SHUSHUFINDI
        Parish::create([
            'name' => 'SHUSHUFINDI',
            'canton_id' => 209,
        ]);
        Parish::create([
            'name' => 'LIMONCOCHA',
            'canton_id' => 209,
        ]);
        Parish::create([
            'name' => 'PAÑACOCHA',
            'canton_id' => 209,
        ]);
        Parish::create([
            'name' => 'SAN ROQUE (CAB. EN SAN VICENTE)',
            'canton_id' => 209,
        ]);
        Parish::create([
            'name' => 'SAN PEDRO DE LOS COFANES',
            'canton_id' => 209,
        ]);
        Parish::create([
            'name' => 'SIETE DE JULIO',
            'canton_id' => 209,
        ]);
        #endregion

        #region SUCUMBÍOS
        Parish::create([
            'name' => 'LA BONITA',
            'canton_id' => 210,
        ]);
        Parish::create([
            'name' => 'EL PLAYÓN DE SAN FRANCISCO',
            'canton_id' => 210,
        ]);
        Parish::create([
            'name' => 'LA SOFÍA',
            'canton_id' => 210,
        ]);
        Parish::create([
            'name' => 'ROSA FLORIDA',
            'canton_id' => 210,
        ]);
        Parish::create([
            'name' => 'SANTA BÁRBARA',
            'canton_id' => 210,
        ]);
        #endregion

        #region CASCALES
        Parish::create([
            'name' => 'EL DORADO DE CASCALES',
            'canton_id' => 211,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA DE SUCUMBÍOS',
            'canton_id' => 211,
        ]);
        Parish::create([
            'name' => 'SEVILLA',
            'canton_id' => 211,
        ]);
        #endregion

        #region CUYABENO
        Parish::create([
            'name' => 'TARAPOA',
            'canton_id' => 212,
        ]);
        Parish::create([
            'name' => 'CUYABENO',
            'canton_id' => 212,
        ]);
        Parish::create([
            'name' => 'AGUAS NEGRAS',
            'canton_id' => 212,
        ]);
        #endregion

        #region ORELLANA
        Parish::create([
            'name' => 'PUERTO FRANCISCO DE ORELLANA (EL COCA)',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'DAYUMA',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'TARACOA (NUEVA ESPERANZA: YUCA)',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'ALEJANDRO LABAKA',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'EL DORADO',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'EL EDÉN',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'GARCÍA MORENO',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'INÉS ARANGO (CAB. EN WESTERN)',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'LA BELLEZA',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'NUEVO PARAÍSO (CAB. EN UNIÓN)',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE GUAYUSA',
            'canton_id' => 213,
        ]);
        Parish::create([
            'name' => 'SAN LUIS DE ARMENIA',
            'canton_id' => 213,
        ]);
        #endregion

        #region AGUARICO
        Parish::create([
            'name' => 'TIPITINI',
            'canton_id' => 214,
        ]);
        Parish::create([
            'name' => 'NUEVO ROCAFUERTE',
            'canton_id' => 214,
        ]);
        Parish::create([
            'name' => 'CAPITÁN AUGUSTO RIVADENEYRA',
            'canton_id' => 214,
        ]);
        Parish::create([
            'name' => 'CONONACO',
            'canton_id' => 214,
        ]);
        Parish::create([
            'name' => 'SANTA MARÍA DE HUIRIRIMA',
            'canton_id' => 214,
        ]);
        Parish::create([
            'name' => 'TIPUTINI',
            'canton_id' => 214,
        ]);
        Parish::create([
            'name' => 'YASUNÍ',
            'canton_id' => 214,
        ]);
        #endregion

        #region LA JOYA DE LOS SACHAS
        Parish::create([
            'name' => 'LA JOYA DE LOS SACHAS',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'ENOKANQUI',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'POMPEYA',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'SAN CARLOS',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'SAN SEBASTIÁN DEL COCA',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'LAGO SAN PEDRO',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'RUMIPAMBA',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'TRES DE NOVIEMBRE',
            'canton_id' => 215,
        ]);
        Parish::create([
            'name' => 'UNIÓN MILAGREÑA',
            'canton_id' => 215,
        ]);
        #endregion

        #region LORETO
        Parish::create([
            'name' => 'LORETO',
            'canton_id' => 216,
        ]);
        Parish::create([
            'name' => 'AVILA (CAB. EN HUIRUNO)',
            'canton_id' => 216,
        ]);
        Parish::create([
            'name' => 'PUERTO MURIALDO',
            'canton_id' => 216,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE PAYAMINO',
            'canton_id' => 216,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE DAHUANO',
            'canton_id' => 216,
        ]);
        Parish::create([
            'name' => 'SAN VICENTE DE HUATICOCHA',
            'canton_id' => 216,
        ]);
        #endregion

        #region SANTO DOMINGO
        Parish::create([
            'name' => 'ABRAHAM CALAZACÓN',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'BOMBOLÍ',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'CHIGUILPE',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'RÍO TOACHI',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'RÍO VERDE',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'SANTO DOMINGO DE LOS COLORADOS',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'DOMINGO ZARACAY',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'ALLURIQUÍN',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'PUERTO LIMÓN',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'LUZ DE AMÉRICA',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'SAN JACINTO DEL BÚA',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'VALLE HERMOSO',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'EL ESFUERZO',
            'canton_id' => 217,
        ]);
        Parish::create([
            'name' => 'SANTA MARÍA DEL TOACHI',
            'canton_id' => 217,
        ]);
        #endregion

        #region SANTA ELENA
        Parish::create([
            'name' => 'BALLENITA',
            'canton_id' => 218,
        ]);
        Parish::create([
            'name' => 'SANTA ELENA',
            'canton_id' => 218,
        ]);
        Parish::create([
            'name' => 'ATAHUALPA',
            'canton_id' => 218,
        ]);
        Parish::create([
            'name' => 'COLONCHE',
            'canton_id' => 218,
        ]);
        Parish::create([
            'name' => 'CHANDUY',
            'canton_id' => 218,
        ]);
        Parish::create([
            'name' => 'MANGLARALTO',
            'canton_id' => 218,
        ]);
        Parish::create([
            'name' => 'SIMÓN BOLÍVAR (JULIO MORENO)',
            'canton_id' => 218,
        ]);
        Parish::create([
            'name' => 'SAN JOSÉ DE ANCÓN',
            'canton_id' => 218,
        ]);
        #endregion

        #region  LA LIBERTAD
        Parish::create([
            'name' => 'LA LIBERTAD',
            'canton_id' => 219,
        ]);
        #endregion

        #region SALINAS
        Parish::create([
            'name' => 'CARLOS ESPINOZA LARREA',
            'canton_id' => 220,
        ]);
        Parish::create([
            'name' => 'GRAL. ALBERTO ENRÍQUEZ GALLO',
            'canton_id' => 220,
        ]);
        Parish::create([
            'name' => 'VICENTE ROCAFUERTE',
            'canton_id' => 220,
        ]);
        Parish::create([
            'name' => 'SANTA ROSA',
            'canton_id' => 220,
        ]);
        Parish::create([
            'name' => 'SALINAS',
            'canton_id' => 220,
        ]);
        Parish::create([
            'name' => 'ANCONCITO',
            'canton_id' => 220,
        ]);
        Parish::create([
            'name' => 'JOSÉ LUIS TAMAYO (MUEY)',
            'canton_id' => 220,
        ]);
        #endregion
    }
}
