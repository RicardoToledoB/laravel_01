<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $faker = Faker::create();
              
              \DB::table('ciudades')->insert(array(
                   'nombre'  => 'Santiago',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                   
            ));
               \DB::table('ciudades')->insert(array(
                   'nombre'  => 'Arica',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                   
            ));
                \DB::table('ciudades')->insert(array(
                   'nombre'  => 'Rancagua',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                   
            ));
                 \DB::table('ciudades')->insert(array(
                   'nombre'  => 'valdivia',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                   
            ));
        
    }
}
