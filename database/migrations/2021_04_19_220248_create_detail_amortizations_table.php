<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAmortizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_amortizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('amortization_id');
            $table->string('period')->nullable();
            $table->date('payment_date')->nullable();
            $table->double('amount')->nullable();
            $table->double('interest')->nullable();
            $table->double('dividing')->nullable();
            $table->double('total_payment')->nullable();
            $table->double('balance')->nullable();
            $table->timestamps();
            $table->foreign('amortization_id')->references('id')->on('amortizations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_amortizations');
    }
}
