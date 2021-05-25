<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAdvisorVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advisor_visits', function (Blueprint $table) {
            $table->string('code')->nullable()->after('member_id');
            $table->enum('status',['revision','anulado','aprobado'])->default('revision')->after('url_commerce');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advisor_visits', function (Blueprint $table) {
            //
        });
    }
}
