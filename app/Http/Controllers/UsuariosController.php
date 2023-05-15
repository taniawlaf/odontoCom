<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Municipio;
use App\Models\Entidade;
use App\Models\Paise;
use App\Models\TiposUsuario;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    //
    public function index()
    {
        $usuarios = Usuario::where('status', 1)
                  ->orderBy('id_tipo_usuario')
                  ->orderBy('nombre')->get();          
        return view('Usuarios.index')->with('usuarios', $usuarios);
    }
    
    
    public function create()
    {
        $entidades = Entidade::select('id','nombre')
                  ->orderBy('nombre')->get();
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get(); 
        $municipio = Municipio::select('id','nombre')
                  ->orderBy('nombre')->get();
        $tipoUsuario = TiposUsuario::select('id','nombre')
                  ->orderBy('nombre')->get();         
        return view('Usuarios.create')
                ->with('entidades',$entidades)
                ->with('paises',$paises)
                ->with('municipio',$municipio)
                ->with('tipoUsuario',$tipoUsuario);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        Usuario::create($datos);
        return redirect('/usuarios');
    }
    
    
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('Usuarios.read')->with('Usuario', $usuario);
    }
    
    
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $entidades = Entidade::select('id','nombre')
                  ->orderBy('nombre')->get();
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get(); 
        $municipio = Municipio::select('id','nombre')
                  ->orderBy('nombre')->get();
        $tipoUsuario = TiposUsuario::select('id','nombre')
                  ->orderBy('nombre')->get();          
        return view('Usuarios.edit')
               ->with('Usuario', $usuario)
               ->with('entidades',$entidades)
               ->with('paises',$paises)
               ->with('Usuario', $municipio)
               ->with('entidades',$tipoUsuario);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $usuario = Usuario::find($id);
        $usuario->update($datos);
        return redirect('/usuarios');
    }
    
    
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->status = 0;
        $usuario->save();
        return redirect('/usuarios');
    }
}
