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
            $table->string('name');
            $table->integer('total_jam');
            $table->timestamps();
        });
        Schema::table('mata_pelajarans', function (Blueprint $table) {
            $table->unsignedInteger('tingkatan_id');
            $table->foreign('tingkatan_id')->references('id')->on('tingkatans');
        });
        Schema::table('mata_pelajarans', function (Blueprint $table) {
            $table->unsignedInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id')->on('jurusans');
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
