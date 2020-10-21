<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenagaPendidiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_pendidiks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('NUPTK')->default('-');
            $table->string('JK');
            $table->string('tempat');
            $table->string('tanggal');
            $table->string('NIP')->default('-');
            $table->string('status');
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
        Schema::dropIfExists('tenaga_pendidiks');
    }
}
