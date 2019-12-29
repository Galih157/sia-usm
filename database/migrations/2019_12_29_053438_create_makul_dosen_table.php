<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakulDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_makul')->unsigned();
            $table->bigInteger('id_dosen')->unsigned();
            $table->integer('hari'); // weekday 1 = Senin dst.
            $table->time('waktu');
            $table->timestamps();

            $table->foreign('id_makul')->references('id')->on('makul');
            $table->foreign('id_dosen')->references('id')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makul_dosen');
    }
}
