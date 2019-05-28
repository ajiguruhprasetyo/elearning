<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnswerKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_keys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('answer_key');
            $table->bigInteger('id_soal')->unsigned();
            $table->timestamps();
        });

        Schema::table('answer_keys', function (Blueprint $table){
            $table->foreign('id_soal')->references('id')->on('soals')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_keys');
    }
}
