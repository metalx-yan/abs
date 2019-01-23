<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipePelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_pelajarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipe_pelajaran');
            $table->timestamps();
        });

        Schema::table('mata_pelajarans', function (Blueprint $table) {
            $table->unsignedInteger('tipe_pelajaran_id');
            $table->foreign('tipe_pelajaran_id')->references('id')->on('tipe_pelajarans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipe_pelajarans');
    }
}
