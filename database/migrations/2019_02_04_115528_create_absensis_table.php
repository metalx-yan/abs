<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('keterangan', ['sakit', 'izin', 'alpha']);
            $table->timestamps();
        });
        Schema::table('absensis', function (Blueprint $table) {
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
        Schema::dropIfExists('absensis');
    }
}
