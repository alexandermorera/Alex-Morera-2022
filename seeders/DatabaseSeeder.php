<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\agregarEmpresasIniciales;
use Database\Seeders\agregarEmpleadosIniciales;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this -> call (agregarEmpresasIniciales::class);
    	$this -> call (agregarEmpleadosIniciales::class);

    }
}
