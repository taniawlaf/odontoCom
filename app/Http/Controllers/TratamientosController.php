<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TratamientosController extends Controller
{
    //
    public function tratamientos_control()
	{
		return view('template.tratamientos');
	}
}
