<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cita;
use App\Models\Tratamiento;
use App\Models\Usuario;

class CitasController extends Controller
{
    public function index()
    {
        $cita = Cita::where('status', 1)
                  ->orderBy('id_usuario')
                  ->orderBy('fecha')->get();          
        return view('Citas.index')->with('cita', $cita);
    }
    
    
    public function create()
    {
        $tratamientos = Tratamiento::select('id','nombre')
                  ->orderBy('nombre')->get();
        $usuarios = Usuario::select('id','nombre')
                  ->orderBy('nombre')->get();          
        return view('Citas.create')
                ->with('tratamientos',$tratamientos)
                ->with('usuarios',$usuarios);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        Cita::create($datos);
        return redirect('/cita');
    }
    
    
    public function show($id)
    {
        $cita = Cita::find($id);
        return view('Citas.read')->with('cita', $cita);
    }
    
    
    public function edit($id)
    {
        $cita = Cita::find($id);
        $tratamientos = Tratamiento::select('id','nombre')
                  ->orderBy('nombre')->get();
        $usuarios = Usuario::select('id','nombre')
                  ->orderBy('nombre')->get();           
        return view('cita.edit')
               ->with('cita', $cita)
               ->with('tratamientos',$tratamientos)
               ->with('usuarios',$usuarios);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $cita = Cita::find($id);
        $cita->update($datos);
        return redirect('/cita');
    }
    
    
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->status = 0;
        $cita->save();
        return redirect('/cita');
    }
}
