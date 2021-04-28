<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisor_visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            //step 1
            $table->enum('credit_type', ['Nuevo', 'Refinanciación']);
            $table->string('name_debtor')->nullable();
            $table->string('dni_debtor')->nullable();
            $table->string('amount')->nullable();
            $table->string('reason_invest')->nullable();
            $table->string('pay')->nullable();
            $table->string('deadline')->nullable();
            $table->boolean('variable_fee')->nullable();
            $table->enum('credit_segment', ['Microcrédito', 'Consumo', 'Inversión', 'Vivienda']);

            //step2
            //step3

            //step4
            $table->string('business_name')->nullable();
            $table->string('ruc')->nullable();
            $table->string('business_age')->nullable();
            $table->enum('sales_place', ['Local', 'Ambulante']);
            $table->enum('local_type', ['Propio', 'Arriendo', 'Familiares', 'Otro']);
            $table->string('business_time')->nullable();
            $table->string('business_address')->nullable();
            $table->string('streets')->nullable();
            $table->string('number')->nullable();
            $table->string('business_reference')->nullable();


            //step 6
            $table->string('living_place_lat')->nullable();
            $table->string('living_place_lng')->nullable();
            $table->string('url_living')->nullable();
            $table->string('commerce_lat')->nullable();
            $table->string('commerce_lng')->nullable();
            $table->string('url_commerce')->nullable();
            $table->timestamps();
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advisor_visits');
    }
}
