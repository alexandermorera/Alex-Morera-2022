<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\agregarEmpresasIniciales;
use Database\Seeders\agregarEmpleadosIniciales;
use Database\Seeders\agregarEmpresasAdicionales;
use Database\Seeders\agregarEmpleadosAdicionales;
use Database\Seeders\AgregarUsuarios;
//use Database\Seeders\Rols;
//use Database\Seeders\FormasPago;
//use Database\Seeders\Productos;
//use Database\Seeders\Usuario_s;
//use Database\Seeders\Pedido;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this -> call (AgregarEmpresasIniciales::class);
    	$this -> call (AgregarEmpleadosIniciales::class);
        $this -> call (AgregarEmpresasAdicionales::class);
        $this -> call (AgregarEmpleadosAdicionales::class);
        
       // $this->call(Rols::Class);
       //$this->call(FormasPago::Class);
        //$this->call(Productos::Class);
        //$this->call(Usuario_s::Class);
        //$this->call(Pedido::Class);

    }
}
