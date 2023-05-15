<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiposUsuario;

class Tipos_usuarioController extends Controller
{
    //
    public function index()
    {
        //$tiposUsuario = TiposUsuarios::all();
        //$tiposUsuario = TiposUsuarios::orderBy('id')->get();
        //$tiposUsuario = TiposUsuarios::orderBy('nombre')->get();
        //$tiposUsuario = TiposUsuarios::where('status', '=' ,1)
                  //->orderBy('nombre')->get();
        //$tiposUsuario = TiposUsuarios::where('status', 1)
                  //->orderBy('nombre','desc')->get();
        //$tiposUsuario = TiposUsuarios::where('status', 1)
                  //->where('clave','MX')
                  //->orderBy('nombre','asc')->get();
        //$tiposUsuario = TiposUsuarios::where('status', 1)
                  //->orwhere('clave','MX')
                  //->orderBy('nombre','asc')->get();          
        $tiposUsuario = TiposUsuario::where('status', 1)
                  ->orderBy('nombre')->get();          


        return view('Tipos_usuarios.index')->with('TiposUsuarios', $tiposUsuario);
    }
    
    
    
    public function create()
    {
        return view('Tipos_usuarios.create');
    }    

    

    public function store(Request $request)
    {
        $datos = $request->all();
        TiposUsuario::create($datos);
        return redirect('/tiposUsuario');
    }
    
    
    
    public function show($id)
    {
        $tiposUsuario = TiposUsuario::find($id);
        return view('Tipos_usuarios.read')->with('tiposUsuario', $tiposUsuario);
    }
    
    
    
    public function edit($id)
    {
        $tiposUsuario = TiposUsuario::find($id);
        return view('Tipos_usuarios.edit')->with('tiposUsuario', $tiposUsuario);
    }
    
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $tiposUsuario = TiposUsuario::find($id);
        $tiposUsuario->update($datos);
        return redirect('/tiposUsuario');
    }
    
    public function destroy($id)
    {
        //Borrado fisico
        //$tiposUsuario = TiposUsuarios::find($id);
        //$tiposUsuario->destroy($id);
        
        //Borrado lógico
        $tiposUsuario = TiposUsuario::find($id);
        $tiposUsuario->status = 0;
        $tiposUsuario->save();
        
        return redirect('/tiposUsuario');
    }
}
