<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lapor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapors', function (Blueprint $table) {
            Schema::defaultStringLength(191);
             $table->increments('id');
             $table->string('nama');
             $table->integer('no_idt');
             $table->string('peng');
             $table->String('file');
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
        Schema::drop('lapors');
    }
}
