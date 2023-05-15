<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Clinica;
use App\Models\Consultorio;

class ConsultoriosController extends Controller
{
    //
    public function index()
    {
        $consultorio = consultorio::where('status', 1)
                  ->orderBy('id_clinica')
                  ->orderBy('numero')->get();          
        return view('Consultorios.index')->with('consultorios', $consultorio);
    }
    
    
    public function create()
    {
        $usuario = Usuario::select('id','nombre')
                  ->orderBy('nombre')->get();
        $clinica = Clinica::select('id','nombre')
                  ->orderBy('nombre')->get();          
        return view('Consultorios.create')
                ->with('usuario',$usuario)
                ->with('clinica',$clinica);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        consultorio::create($datos);
        return redirect('/consultorios');
    }
    
    
    public function show($id)
    {
        $consultorio = Consultorio::find($id);
        return view('Consultorios.read')->with('consultorios', $consultorio);
    }
    
    
    public function edit($id)
    {
        $consultorio = Consultorio::find($id);
        $usuario = Usuario::select('id','nombre')
                  ->orderBy('nombre')->get();
        $clinica = Clinica::select('id','nombre')
                  ->orderBy('nombre')->get();           
        return view('consultorios.edit')
               ->with('consultorios', $consultorio)
               ->with('usuario',$usuario)
               ->with('clinica',$clinica);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $consultorio = consultorio::find($id);
        $consultorio->update($datos);
        return redirect('/consultorios');
    }
    
    
    public function destroy($id)
    {
        $consultorio = consultorio::find($id);
        $consultorio->status = 0;
        $consultorio->save();
        return redirect('/consultorios');
    }
}
