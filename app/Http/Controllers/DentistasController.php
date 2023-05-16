<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Usuario;
use \App\Models\Consultorio;
use \App\Models\Clinica;

class DentistasController extends Controller
{
    //
    public function dentistas_control($id)
	{   
        $consultorios=Consultorio::with('usuario')->where('id_clinica',$id)->get();
      //  var_dump($consultorios[2]->usuario->nombre);
        //die();

		/*$dentistas = Usuario::where('id_tipo_usuario', 1)
		->orderBy('nombre')
		->get();*/
		//var_dump($usuarios[2]->nombre);
        //die();
		return view('template.dentistas1',[
			'consultorio'=>$consultorios,
			//'dentistas'=>$dentistas
		]);
        
	}
}
