<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tratamiento;
use App\Models\Usuario;
use App\Models\Cita;

class FormularioController extends Controller
{
    //
    public function form_control()
	{
		$tratamientos = Tratamiento::all();
		$usuarios = Usuario::where('id_tipo_usuario', 2)
		->orderBy('nombre')
		->get();
		//var_dump($usuarios[2]->nombre);
        //die();
		return view('template.formulario1',[
			'tratamientos'=>$tratamientos,
			'usuarios'=>$usuarios
		]);
	}

	public function save_record( Request $request ) {
		$citaNuevo = new Cita();
        $citaNuevo->status = 1;
        $citaNuevo->id_tratamiento = $request->input('tratamiento');
        $citaNuevo->id_usuario = $request->input('usuario');
		$citaNuevo->fecha = $request->input('fechaCita');
        $citaNuevo->save();
		$infoMessage = "Registro insertado correctamente";
        //csrf_field();
        return redirect()->to('http://127.0.0.1:8000/formulario/');
	}
}
