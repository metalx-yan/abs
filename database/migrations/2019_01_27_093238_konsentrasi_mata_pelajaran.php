<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KonsentrasiMataPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsentrasi_mata_pelajaran', function (Blueprint $table) {
            $table->year('tahun_awal');
            $table->year('tahun_akhir');
            $table->timestamps();
        });
        Schema::table('konsentrasi_mata_pelajaran', function (Blueprint $table) {
            $table->unsignedInteger('konsentrasi_id');
            $table->foreign('konsentrasi_id')->references('id')->on('konsentrasis');
            $table->unsignedInteger('mata_pelajaran_id');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
