<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->string('pelajaran');
            $table->timestamps();
        });
        Schema::table('mata_pelajarans', function (Blueprint $table) {
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
        Schema::dropIfExists('mata_pelajarans');
    }
}
