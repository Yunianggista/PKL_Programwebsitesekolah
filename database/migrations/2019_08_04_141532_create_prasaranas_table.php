<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrasaranasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasaranas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->string('kepemilikan');
            $table->string('status');
            $table->string('presentase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prasaranas');
    }
}
