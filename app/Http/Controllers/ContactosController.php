<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    //
    public function contactos_control()
	{
		return view('template.contactos');
	}
}
