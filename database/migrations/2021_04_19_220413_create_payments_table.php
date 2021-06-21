<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->unsignedBigInteger('amortization_id')->nullable();
            $table->unsignedBigInteger('detail_amortization_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('member_id')->nullable();
            $table->unsignedBigInteger('credit_id')->nullable();
            $table->date('date_period')->nullable();
            $table->date('date_pay')->nullable();
            $table->double('total')->nullable();
            $table->double('balance')->nullable();
            $table->double('interest_mora')->nullable();
            $table->string('num_pay')->nullable();
            $table->string('customers_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('amount')->nullable();
            $table->string('status_pay')->nullable();
            $table->boolean('status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('payments');
    }
}
