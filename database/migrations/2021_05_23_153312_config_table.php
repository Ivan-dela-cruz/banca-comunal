<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_table', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->nullable();
            $table->string('serie')->nullable();
            $table->bigInteger('complemenet')->nullable();
            $table->integer('secuence')->nullable();
            $table->integer('description')->nullable();
            $table->boolean('status')->default(true);
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
        //
    }
}
