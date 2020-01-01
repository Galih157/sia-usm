<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim');
            $table->bigInteger('id_kelas_dosen')->unsigned();
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('CASCADE');
            $table->foreign('id_kelas_dosen')->references('id')->on('kelas_dosen')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_mahasiswa');
    }
}
