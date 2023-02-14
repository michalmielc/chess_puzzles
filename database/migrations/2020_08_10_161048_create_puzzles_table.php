<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuzzlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puzzles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bookId')->unsigned();
            $table->foreign('bookId')->references('id')->on('books');
            $table->string('name');
            $table->integer('attempts')->unsigned();
            $table->integer('solved')->unsigned();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puzzles');
    }
}
