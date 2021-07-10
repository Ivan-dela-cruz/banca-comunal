<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsSomeTables extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('account_clients', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });
        //Schema::table('account', function (Blueprint $table) {
        //    $table->softDeletes()->after('updated_at');
        //});
        Schema::table('advisor_visits', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });
        Schema::table('credit_requests', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
        });

        //Y AQUI VAMOS UBICANDO LAS DEMAS TABLAS QUE FALTAN

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account_clients', function($table) {
            $table->dropColumn('delete_at');
        });
        //Schema::table('account', function($table) {
        //    $table->dropColumn('delete_at');
        //});
        Schema::table('advisor_visits', function($table) {
            $table->dropColumn('delete_at');
        });
        Schema::table('credit_requests', function($table) {
            $table->dropColumn('delete_at');
        });
    }
}
