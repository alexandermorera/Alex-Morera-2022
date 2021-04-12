<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\usuario;

class Usuario_s extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuario::factory()->count(5)->create();
    }
}