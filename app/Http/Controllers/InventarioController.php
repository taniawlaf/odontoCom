<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    //
    public function inventario_control()
	{
		return view('template.inventario');
	}
}
