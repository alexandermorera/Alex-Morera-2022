<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pedido;

class Pedidos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pedidos::factory()->count(3)->create();
    }
}
