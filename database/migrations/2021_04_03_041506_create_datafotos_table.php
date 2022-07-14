<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatafotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datafotos', function (Blueprint $table) {
            $table->id();
            $table->string('nokamera');
            $table->string('nama');
            $table->string('email');
            $table->date('tanggal');
            $table->string('filefoto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datafotos');
    }
}
