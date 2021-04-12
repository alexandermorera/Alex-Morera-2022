<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\producto;


class Productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productos::factory()->count(30)->create();
    }
}