<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiposTratamiento;

class Tipos_tratamientoController extends Controller
{
    //
    public function index()
    {
        //$tiposTratamientos = TiposTratamientos::all();
        //$tiposTratamientos = TiposTratamientos::orderBy('id')->get();
        //$tiposTratamientos = TiposTratamientos::orderBy('nombre')->get();
        //$tiposTratamientos = TiposTratamientos::where('status', '=' ,1)
                  //->orderBy('nombre')->get();
        //$tiposTratamientos = TiposTratamientos::where('status', 1)
                  //->orderBy('nombre','desc')->get();
        //$tiposTratamientos = TiposTratamientos::where('status', 1)
                  //->where('clave','MX')
                  //->orderBy('nombre','asc')->get();
        //$tiposTratamientos = TiposTratamientos::where('status', 1)
                  //->orwhere('clave','MX')
                  //->orderBy('nombre','asc')->get();          
        $tiposTratamientos = TiposTratamiento::where('status', 1)
                  ->orderBy('nombre')->get();          


        return view('Tipos_tratamientos.index')->with('tiposTratamientos', $tiposTratamientos);
    }
    
    
    
    public function create()
    {
        return view('Tipos_tratamientos.create');
    }    

    

    public function store(Request $request)
    {
        $datos = $request->all();
        TiposTratamiento::create($datos);
        return redirect('/tiposTratamiento');
    }
    
    
    
    public function show($id)
    {
        $tiposTratamientos = TiposTratamiento::find($id);
        return view('Tipos_tratamientos.read')->with('tiposTratamiento', $tiposTratamientos);
    }
    
    
    
    public function edit($id)
    {
        $tiposTratamientos = TiposTratamiento::find($id);
        return view('Tipos_tratamientos.edit')->with('tiposTratamiento', $tiposTratamientos);
    }
    
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $tiposTratamientos = TiposTratamiento::find($id);
        $tiposTratamientos->update($datos);
        return redirect('/tiposTratamiento');
    }
    
    public function destroy($id)
    {
        //Borrado fisico
        //$tiposTratamientos = TiposTratamientos::find($id);
        //$tiposTratamientos->destroy($id);
        
        //Borrado lógico
        $tiposTratamientos = TiposTratamiento::find($id);
        $tiposTratamientos->status = 0;
        $tiposTratamientos->save();
        
        return redirect('/tiposTratamiento');
    }
}
