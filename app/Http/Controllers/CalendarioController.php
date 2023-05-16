<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    //
    public function calendario_control()
	{
		return view('template.calendario1');
	}
}
