<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertemuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertemuans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pertemuan');
            $table->timestamps();
        });
        Schema::table('pertemuans', function (Blueprint $table) {
            $table->unsignedInteger('konsentrasi_id');
            $table->foreign('konsentrasi_id')->references('id')->on('konsentrasis');
            $table->unsignedInteger('mata_pelajaran_id');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans');
        });
        Schema::table('absens', function (Blueprint $table) {
            $table->unsignedInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->unsignedInteger('pertemuan_id');
            $table->foreign('pertemuan_id')->references('id')->on('pertemuans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertemuans');
    }
}
