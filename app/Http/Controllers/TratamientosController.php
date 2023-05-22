<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TiposTratamiento;
use App\Models\Tratamiento;

class TratamientosController extends Controller
{
    //
    public function tratamientos_control()
	{
		return view('template.tratamientos1');
	}
	public function index()
    {
        $tratamientos = Tratamiento::where('status', 1)
                  ->orderBy('id_tipo_tratamiento')
                  ->orderBy('nombre')->get();          
        return view('Tratamientos.index')->with('tratamientos', $tratamientos);
    }
    
    
    public function create()
    {
        $tiposTratamiento = TiposTratamiento::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Tratamientos.create')
                ->with('tiposTratamiento',$tiposTratamiento);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        Tratamiento::create($datos);
        return redirect('/tratamiento');
    }
    
    
    
    public function show($id)
    {
        $tratamientos = Tratamiento::find($id);
        return view('Tratamientos.read')->with('tratamientos', $tratamientos);
    }
    
    
    public function edit($id)
    {
        $tratamientos = Tratamiento::find($id);
        $tiposTratamiento = TiposTratamiento::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Tratamientos.edit')
               ->with('tratamientos', $tratamientos)
               ->with('tiposTratamiento',$tiposTratamiento);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $tratamientos = Tratamiento::find($id);
        $tratamientos->update($datos);
        return redirect('/tratamiento');
    }
    
    
    public function destroy($id)
    {
        $tratamientos= Tratamiento::find($id);
        $tratamientos->status = 0;
        $tratamientos->save();
        return redirect('/tratamiento');
    }
}
