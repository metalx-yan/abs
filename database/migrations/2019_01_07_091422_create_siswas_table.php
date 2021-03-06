<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis', 9)->unique();
            $table->string('nama', 40);
            $table->string('no_hp_orangtua', 13)->unique();
            $table->timestamps();
        });
        Schema::table('siswas', function (Blueprint $table) {
            $table->unsignedInteger('konsentrasi_id');
            $table->foreign('konsentrasi_id')->references('id')->on('konsentrasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
