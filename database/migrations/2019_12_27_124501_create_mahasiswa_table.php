<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->bigInteger('id_prodi')->unsigned()->nullable();
            $table->string('nama');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('jenis_kelamin');
            $table->timestamps();

            $table->foreign('id_prodi')->references('id')->on('prodi')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
