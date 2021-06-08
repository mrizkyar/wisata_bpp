<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(array(
            'name' => "Muhammad Rizky Al Rachman",
            'email' => "muhammadrizkyar03@gmail.com",
            'password' => Hash::make('12345678'),
            'admin' => 1
        ));
        DB::table('users')->insert(array(
            'name' => "admin cadangan",
            'email' => "admincadangan@gmail.com",
            'password' => Hash::make('123456789'),
            'admin' => 1
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
