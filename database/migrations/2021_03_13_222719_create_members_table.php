<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dni')->unique()->nullable();
            $table->string('passport')->unique()->nullable();
            $table->string('instruction')->nullable();
            $table->string('marital_status')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('member_type')->nullable();
            $table->string('acount_number')->nullable();
            $table->boolean('status')->default(true);
            $table->string('url_image')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->string('dato1')->nullable();
            $table->string('dato2')->nullable();
            $table->string('dato3')->nullable();
            $table->double('valor1')->nullable();
            $table->double('valor2')->nullable();
            $table->double('valor3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
