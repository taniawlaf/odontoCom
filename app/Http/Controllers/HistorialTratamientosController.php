<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class HistorialTratamientosController extends Controller
{
    //
    
    public function historial_tratamientos_control()
	{
		//$citas=Cita::all();
		$citas=Cita::with(['tratamiento','usuario'])->get();
		/*var_dump($citas[0]->fecha->format('d-m-Y H:i:s'));
		var_dump($citas[0]->tratamiento->nombre);
		var_dump($citas[0]->usuario->nombre);
		
		die();*/

		
		return view('template.historialTratamientos', [
			'arrayCitas'=>$citas
		]);
	}
}
