<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makul', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_prodi')->unsigned();
            $table->integer('sks');
            $table->string('kode');
            $table->string('nama');
            $table->timestamps();

            $table->foreign('id_prodi')->references('id')->on('prodi')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makul');
    }
}
