<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('member_id')->nullable();
            $table->date('date')->nullable();
            $table->text('description')->nullable();
            $table->string('amount')->nullable();
            $table->string("amount_letters")->nullable();
            $table->string("place")->nullable();
            $table->enum('type_partner',['cliente','socio','socio fundador'])->default('cliente');
            $table->string('deposit')->nullable();
            $table->string('retreats')->nullable();
            $table->string('balance')->nullable();
            $table->string('type_currency')->nullable();
            $table->enum('status',['Finalizado','Anulado'])->default('Finalizado');

            $table->string('data1')->nullable();
            $table->string('data2')->nullable();
            $table->string('data3')->nullable();
            $table->double('valor1')->nullable();
            $table->double('value2')->nullable();
            $table->double('value3')->nullable();
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('account_clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
