<?php


use Illuminate\Database\Migrations\Migration;

class CiudadestoUsers extends Migration {
    public function up() {
        Schema::table('usuarios', function($table) {
            $table->integer('ciudad_id')->unsigned();
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
        });
    }
    public function down() {
        Schema::table('usuarios', function($table) {
          $table->dropColumn('ciudad_id');
   
      });
    }

}
