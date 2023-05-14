<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicasController extends Controller
{
    //
    public function clinicas_control()
	{
		return view('template.clinicas');
	}
}
