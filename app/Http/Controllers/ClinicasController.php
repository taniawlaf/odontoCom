<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinica;
use App\Models\Municipio;
use App\Models\Entidade;
use App\Models\Paise;

class ClinicasController extends Controller
{
    //
    public function clinicas_control()
	{
		$clinicas=Clinica::with(['entidade','municipio','paise'])->get();
		return view('template.clinicas',['arrayClinicas'=>$clinicas]);
	}


	public function index()
    {
        $clinica = Clinica::where('status', 1)
                  ->orderBy('id_pais')
                  ->orderBy('nombre')->get();          
        return view('Clinicas.index')->with('clinica', $clinica);
    }
    
    
    public function create()
    {
        $entidades = Entidade::select('id','nombre')
                  ->orderBy('nombre')->get();
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get();  
		$municipio = Municipio::select('id','nombre')
                  ->orderBy('nombre')->get();          
        return view('Clinicas.create')
                ->with('entidades',$entidades)
                ->with('paises',$paises)
				->with('municipio',$municipio);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        Clinica::create($datos);
        return redirect('/clinica');
    }
    
    
    public function show($id)
    {
        $clinica = Clinica::find($id);
        return view('Clinicas.read')->with('clinica', $clinica);
    }
    
    
    public function edit($id)
    {
        $clinica = Clinica::find($id);
        $entidades = Entidade::select('id','nombre')
                  ->orderBy('nombre')->get();
        $paises = Paise::select('id','nombre')
                  ->orderBy('nombre')->get();     
		$municipio = Municipio::select('id','nombre')
                  ->orderBy('nombre')->get();        
        return view('Clinicas.edit')
               ->with('clinica', $clinica)
               ->with('entidades',$entidades)
               ->with('paises',$paises)
			   ->with('municipio',$municipio);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $clinica = Clinica::find($id);
        $clinica->update($datos);
        return redirect('/clinica');
    }
    
    
    public function destroy($id)
    {
        $clinica = Clinica::find($id);
        $clinica->status = 0;
        $clinica->save();
        return redirect('/clinica');
    }
}
