<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorialTratamientosController extends Controller
{
    //
    
    public function historial_tratamientos_control()
	{
		return view('template.historialTratamientos');
	}
}
