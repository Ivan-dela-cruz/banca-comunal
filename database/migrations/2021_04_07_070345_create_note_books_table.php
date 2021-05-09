<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->string('info1')->nullable();
            $table->string('info2')->nullable();
            $table->string('info3')->nullable();
            $table->string('number')->nullable();
            $table->string('sec')->nullable();
            $table->string('cod')->nullable();
            $table->string('account_num')->nullable();
            $table->unsignedBigInteger('member_id')->nullable();
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
        Schema::dropIfExists('note_books');
    }
}
