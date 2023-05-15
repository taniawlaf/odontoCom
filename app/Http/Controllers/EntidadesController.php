<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entidade;
use App\Models\Paise;


class EntidadesController extends Controller
{
    public function index()
    {
        $entidades = Entidade::where('status', 1)
                  ->orderBy('id_pais')
                  ->orderBy('nombre')->get();          
        return view('Entidades.index')->with('entidades', $entidades);
    }
    
    
    public function create()
    {
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Entidades.create')
                ->with('paises',$paises);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        Entidade::create($datos);
        return redirect('/entidades');
    }
    
    
    
    public function show($id)
    {
        $entidad = Entidade::find($id);
        return view('Entidades.read')->with('entidad', $entidad);
    }
    
    
    public function edit($id)
    {
        $entidad = Entidade::find($id);
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Entidades.edit')
               ->with('entidad', $entidad)
               ->with('paises',$paises);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $entidad = Entidade::find($id);
        $entidad->update($datos);
        return redirect('/entidades');
    }
    
    
    public function destroy($id)
    {
        $entidad = Entidade::find($id);
        $entidad->status = 0;
        $entidad->save();
        return redirect('/entidades');
    }
}
