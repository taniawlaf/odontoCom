<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinica;

class ClinicasController extends Controller
{
    //
    public function clinicas_control()
	{
		$clinicas=Clinica::with(['entidade','municipio','paise'])->get();
		return view('template.clinicas',['arrayClinicas'=>$clinicas]);
	}
}
