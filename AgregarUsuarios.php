<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        for ($i=1; $i < 100 ; $i++) {

        	DB::table('comercio')->insert([
            'created_at' => date('Y-m-d H:m:s'),
       		'updated_at' => date('Y-m-d H:m:s'),
        	'nombre' => $faker->name(),
         	'telefono' => $faker ->numberBetween(999999900000,9999999999999),
           	'transaccion' => $faker ->randomElement(['aprobado','rechazado']),
        	'documento' => $faker ->numberBetween(0,99000),
        	'producto_id' => $faker ->numberBetween(1,30)

    ]);
        }
  }
}
