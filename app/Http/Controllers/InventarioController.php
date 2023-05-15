<?php

namespace App\Http\Controllers;

use App\Models\Materiales;
use Illuminate\Http\Request;
use App\Models\Inventario;

class InventarioController extends Controller
{
    //
    public function inventario_control()
	{
		$inventarios=Inventario::with(['materiale','usuario'])->get();
		return view('template.inventario', ['arrayInventarios'=>$inventarios]);
	}
}
