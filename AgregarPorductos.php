<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarPorductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
       for ($i=1; $i < 50; $i++) { 
       DB::table('productos')->insert([
       		'nombre' => $faker->product(), 
       		'precio' => $faker->numberBetween(999900,999999),
       		'created_at' => date('Y-m-d H:m:s'),
       		'updated_at' => date('Y-m-d H:m:s')
       ]); 
    }
   }
}
