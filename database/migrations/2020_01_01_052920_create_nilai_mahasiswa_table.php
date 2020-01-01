<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_jadwal')->unsigned();
            $table->string('nama');
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('id_jadwal')->references('id')->on('jadwal_mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_mahasiswa');
    }
}
