<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsentrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsentrasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('konsentrasi');
            $table->timestamps();
        });
        Schema::table('konsentrasis', function (Blueprint $table) {
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
        Schema::dropIfExists('konsentrasis');
    }
}