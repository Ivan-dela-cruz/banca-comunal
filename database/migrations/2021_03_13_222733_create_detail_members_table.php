<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->string('name_spouse')->nullable();
            $table->string('last_name_spouse')->nullable();
            $table->string('dni_spouse')->nullable();
            $table->string('passport_spouse')->nullable();
            $table->string('birth_date_spouse')->nullable();
            $table->string('email_spouse')->nullable();
            $table->string('phone1_spouse')->nullable();
            $table->string('phone2_spouse')->nullable();
            //datos direcciones
            $table->string('city')->nullable();
            $table->string('canton')->nullable();
            $table->string('parish')->nullable();
            $table->string('principal_street')->nullable();
            $table->string('secundary_street')->nullable();
            $table->string('reference_place')->nullable();
            //referencias personales
            $table->string('name_reference')->nullable();
            $table->string('last_name_reference')->nullable();
            $table->string('dni_reference')->nullable();
            $table->string('relationship')->nullable();
            $table->string('time_to_meet')->nullable();
            $table->string('instruction_reference')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->string('dato1')->nullable();
            $table->string('dato2')->nullable();
            $table->string('dato3')->nullable();
            $table->double('valor1')->nullable();
            $table->double('valor2')->nullable();
            $table->double('valor3')->nullable();
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
        Schema::dropIfExists('detail_members');
    }
}
