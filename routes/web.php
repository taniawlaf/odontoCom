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

Route::get('/master2', function() {
    return view('template.masterHeredado');
});

Route::get('/master3', function() {
    return view('template.masterHeredado2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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