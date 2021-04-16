<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_requests', function (Blueprint $table) {
            $table->id();
            //informacion de credito
            $table->string('number')->nullable();
            $table->string('city')->nullable();
            $table->date('date_request')->nullable();
            $table->string('type_credit')->nullable();
            $table->string('amoutn')->nullable();
            $table->string('reason_invest')->nullable();
            $table->string('pay')->nullable();
            $table->boolean('monthly')->nullable();
            $table->string('plazo')->nullable();
            $table->bool('variable_fee')->nullable();
            $table->enum('credit_segment',['Microcrédito','Consumo','Inversión','Vivienda']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_requests');
    }
}
