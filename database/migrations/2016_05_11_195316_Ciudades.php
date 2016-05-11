<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ciudades extends Migration
{
    public function up() {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
           
        });
        
       
    }

    public function down() {
        Schema::drop('ciudades');
    }
}
