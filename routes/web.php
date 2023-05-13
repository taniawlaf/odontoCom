<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function(){
    return view('template.master');
});

Auth::routes();

Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'inventario_control']);

Route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'form_control']);

Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'perfil_control']);

Route::get('/calendario', [App\Http\Controllers\CalendarioController::class, 'calendario_control']);

Route::get('/historialTratamientos', [App\Http\Controllers\HistorialTratamientosController::class, 'historial_tratamientos_control']);

Route::get('/contactos', [App\Http\Controllers\ContactosController::class, 'contactos_control']);

Route::get('/tratamientos', [App\Http\Controllers\TratamientosController::class, 'tratamientos_control']);

/*GET
POST:GUARDAR
PUT:ACTUALIZAR
DELETE

Route::get('',function(){
    $titulo = "Listado de pelis";
    $listado = array('moana','batman','avatar');
    return view('peliculas listado')
        ->with('titulo',$titulo)
        ->with('listado',$listado)
});
*/