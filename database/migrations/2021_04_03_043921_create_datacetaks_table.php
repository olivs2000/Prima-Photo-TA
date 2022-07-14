<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatacetakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacetaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ukuran');
            $table->string('notelepon');
            $table->date('tanggal');
            $table->string('filecetak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datacetak');
    }
}
