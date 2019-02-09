<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuruMataPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_mata_pelajaran', function (Blueprint $table) {
            $table->enum('hari',['senin','selasa','rabu','kamis','jumat']);
            $table->time('jam');
            $table->timestamps();
        });
        Schema::table('guru_mata_pelajaran', function (Blueprint $table) {
            $table->unsignedInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('gurus');
            $table->unsignedInteger('mata_pelajaran_id');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans');
            $table->unsignedInteger('konsentrasi_id');
            $table->foreign('konsentrasi_id')->references('id')->on('konsentrasis');
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
