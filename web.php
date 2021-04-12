<?php

use App\Http\Controllers\EmpleadosController;
use App\Models\Empleado;
use Illuminate\Support\Facades\Route;
use App\Models\Empresa;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/* Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('testEmpresas',function() {

	$empleados = Empleado::where('nombre','like','a%')->orderBy('nombre')->get();
	dd($empleados);

});

Route::get('/empleado', function (){
	$empleados = Empleado::all();
	dd($empleados);

});

Route::get('saludar/{idEmpleado}', function($idEmpleado){
	$empleado = Empleado::where('id', $idEmpleado)->first();
	return view('hola')->with('empleado',$empleado);
});

Route::get('saludoEmpleados/{estado}', function($estado){
	$empleados = Empleado::where('estado',$estado)->get();
	return view('hola',compact('empleados','estado'));
}); 
 */
Route::resource('empleados',EmpleadosController::class);