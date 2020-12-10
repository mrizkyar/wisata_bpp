<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkomodasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akomodasis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_akomodasi')->unique();
            $table->string('nama_akomodasi');
            $table->string('alamat_akomodasi');
            $table->string('kontak_akomodasi')->unique();
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
        Schema::dropIfExists('akomodasis');
    }
}
