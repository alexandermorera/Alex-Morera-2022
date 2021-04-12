<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rol;

class Rols extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rols::factory()->count(2)->create();
    }
}