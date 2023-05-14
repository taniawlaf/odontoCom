<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiale;

class TestController extends Controller
{
    public function index() {
        $materiales = Materiale::all();
        return view('template.masterHeredado',[
            'materiales'=>$materiales
        ]);
    }

    public function create(){
        return view('template.create');
    }
    public function store( Request $request ){
        $input = $request->all();
        var_dump($input);
        die();
        Materiale::create($input);
        return redirect('/material')->with('flash_message', 'Material Addedd!');

    }
}
