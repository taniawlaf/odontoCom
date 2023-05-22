<?php

use App\Mail\EnviarCorreo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Archivos_TratamientosController;
use App\Http\Controllers\ClinicasController;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\CitasController; //citas
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\Tipos_tratamientoController;
use App\Http\Controllers\Tipos_usuarioController;
use App\Http\Controllers\TratamientosController;
use App\Http\Controllers\UsuariosController;

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

//Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'inventario_control']);


Route::get('/formulario1', [App\Http\Controllers\FormularioController::class, 'form_control']);

Route::get('/perfil1', [App\Http\Controllers\PerfilController::class, 'perfil_control']);

Route::get('/calendario1', [App\Http\Controllers\CalendarioController::class, 'calendario_control']);

Route::get('/clinicas1', [App\Http\Controllers\ClinicasController::class, 'clinicas_control']);

Route::get('/historialTratamientos1', [App\Http\Controllers\HistorialTratamientosController::class, 'historial_tratamientos_control']);

Route::get('/contactos1', [App\Http\Controllers\ContactosController::class, 'contactos_control']);

Route::get('/dentistas1/{id?}', [App\Http\Controllers\DentistasController::class, 'dentistas_control']);

Route::get('/tratamientos1', [App\Http\Controllers\TratamientosController::class, 'tratamientos_control']);


Route::get('/',function(){
    return view('template.correo');
});

Route::post('enviarcorreo', function() {
    Mail::to('taniamunozdev@gmail.com')->send(new EnviarCorreo);
    return view('template.correo');
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

//-----------------------------------------------------------------------------------------------------

Route::resource('archivosTratamientos',Archivos_TratamientosController::class );
Route::resource('clinicas',ClinicasController::class );
Route::resource('consultorios',ConsultoriosController::class );
Route::resource('entidades',EntidadesController::class );
Route::resource('citas',CitasController::class );//citas
Route::resource('inventario',InventarioController::class );
Route::resource('materiales',MaterialesController::class );
Route::resource('municipios',MunicipiosController::class );
Route::resource('paises',PaisesController::class );
Route::resource('tiposTratamiento',Tipos_tratamientoController::class );
Route::resource('tratamiento',TratamientosController::class );
Route::resource('tiposUsuario',Tipos_usuarioController::class );
Route::resource('usuarios',UsuariosController::class );

Route::get('form_mail',[CorreoController::class,'formulario_correo']);

Route::post('enviar_correo',[CorreoController::class,'enviar']);

Route::get('cruds',function(){
    return view('Cruds.cruds');
});