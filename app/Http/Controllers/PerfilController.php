<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Paise;
class PerfilController extends Controller
{
    //
    public function perfil_control()
	{
		$usuario = Usuario::with(['paise','municipio'])->get();
		/*var_dump($usuario[0]->paise->nombre);
		var_dump($usuario[0]->municipio->nombre);
        die();*/
		//$paisDelUsuario = Paise::where('id',$usuario[0]->id_pais)->get();
		return view('template.perfil',[
			'usuarios'=>$usuario
		]);
	}
}
