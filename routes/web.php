<?php

use App\Mail\EnviarCorreo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Mail;


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

Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'inventario_control']);


Route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'form_control']);

Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'perfil_control']);

Route::get('/calendario', [App\Http\Controllers\CalendarioController::class, 'calendario_control']);

Route::get('/clinicas', [App\Http\Controllers\ClinicasController::class, 'clinicas_control']);

Route::get('/historialTratamientos', [App\Http\Controllers\HistorialTratamientosController::class, 'historial_tratamientos_control']);

Route::get('/contactos', [App\Http\Controllers\ContactosController::class, 'contactos_control']);

Route::get('/tratamientos', [App\Http\Controllers\TratamientosController::class, 'tratamientos_control']);


Route::get('/',function(){
    return view('template.correo');
});

Route::post('enviarcorreo', function() {
    Mail::to('taniapao.tp@gmail.com')->send(new EnviarCorreo);
    return"Correo enviado exitosamente";
})->name('enviarcorreo');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/testing',[App\Http\Controllers\MaterialesController::class, 'index']);
//Route::get('/material/create',[App\Http\Controllers\MaterialesController::class, 'create']);
Route::get('/material',[App\Http\Controllers\MaterialesController::class,'index']);
Route::get('/material/create',[App\Http\Controllers\MaterialesController::class,'create']);
Route::post('/material/store',[App\Http\Controllers\MaterialesController::class,'saveRecord']);
Route::post('/formulario/create',[App\Http\Controllers\FormularioController::class,'save_record']);



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