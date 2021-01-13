<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KomentarAkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentarakms', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->text('komentar');
            $table->unsignedBigInteger('akomodasi_id');
            $table->foreign('akomodasi_id')->references('id')->on('akomodasis')->onDelete('cascade');
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
        Schema::dropIfExists('komentarakms');
    }
}
