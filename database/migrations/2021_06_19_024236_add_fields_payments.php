<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_amortizations', function (Blueprint $table) {
            $table->string('code')->nullable()->after('id');
            $table->enum('status',['atrasado','cancelado','pendiente','anulado'])->default('pendiente')->after('balance');
            $table->double('days_pay')->nullable()->after('status');
            $table->double('interest_pay')->nullable()->after('days_pay');
            $table->double('value_pay')->nullable()->after('interest_pay');
            $table->double('balance_pay')->nullable()->after('value_pay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_amortizations', function (Blueprint $table) {
            //
        });
    }
}
