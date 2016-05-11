<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            \DB::table('usuarios')->insert(array(
                   'nombre'  => $faker->randomElement(['JUAN','PEDRO','RICARDO']),
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s'),
                   'ciudad_id' => 1
            ));
        }
    }
}
