<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailNoteBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_note_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('note_book_id');
            $table->integer('number')->nullable();
            $table->date('date')->nullable();
            $table->string('detail')->nullable();
            $table->double('deposito')->nullable();
            $table->double('retiro')->nullable();
            $table->double('saldo')->nullable();
            $table->string('data1')->nullable();
            $table->string('data2')->nullable();
            $table->string('data3')->nullable();
            $table->double('valor1')->nullable();
            $table->double('value2')->nullable();
            $table->double('value3')->nullable();
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
        Schema::dropIfExists('detail_note_books');
    }
}
