<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Entidade;
use App\Models\Paise;

class MunicipiosController extends Controller
{
    public function index()
    {
        $municipios = Municipio::where('status', 1)
                  ->orderBy('id_entidad')
                  ->orderBy('nombre')->get();          
        return view('Municipios.index')->with('municipios', $municipios);
    }
    
    
    public function create()
    {
        $entidades = Entidade::select('id','nombre')
                  ->orderBy('nombre')->get();
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get();          
        return view('Municipios.create')
                ->with('entidades',$entidades)
                ->with('paises',$paises);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        Municipio::create($datos);
        return redirect('/municipios');
    }
    
    
    public function show($id)
    {
        $municipio = Municipio::find($id);
        return view('Municipios.read')->with('municipio', $municipio);
    }
    
    
    public function edit($id)
    {
        $municipio = Municipio::find($id);
        $entidades = Entidade::select('id','nombre')
                  ->orderBy('nombre')->get();
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get();           
        return view('Municipios.edit')
               ->with('municipio', $municipio)
               ->with('entidades',$entidades)
               ->with('paises',$paises);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $municipio = Municipio::find($id);
        $municipio->update($datos);
        return redirect('/municipios');
    }
    
    
    public function destroy($id)
    {
        $municipio = Municipio::find($id);
        $municipio->status = 0;
        $municipio->save();
        return redirect('/municipios');
    }
}
