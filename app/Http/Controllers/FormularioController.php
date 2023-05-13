<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    //
    public function form_control()
	{
		return view('template.formulario');
	}
}
