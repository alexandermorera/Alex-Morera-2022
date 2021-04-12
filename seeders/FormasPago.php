<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\formaspagos;

class FormasPago extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        formaspagos::factory()->count(3)->create();
    }
}
