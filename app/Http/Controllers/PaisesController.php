<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paise;




class PaisesController extends Controller
{
    public function index()
    {
        //$paises = Paises::all();
        //$paises = Paises::orderBy('id')->get();
        //$paises = Paises::orderBy('nombre')->get();
        //$paises = Paises::where('status', '=' ,1)
                  //->orderBy('nombre')->get();
        //$paises = Paises::where('status', 1)
                  //->orderBy('nombre','desc')->get();
        //$paises = Paises::where('status', 1)
                  //->where('clave','MX')
                  //->orderBy('nombre','asc')->get();
        //$paises = Paises::where('status', 1)
                  //->orwhere('clave','MX')
                  //->orderBy('nombre','asc')->get();          
        $paises = Paise::where('status', 1)
                  ->orderBy('nombre')->get();          


        return view('Paises.index')->with('paises', $paises);
    }
    
    
    
    public function create()
    {
        return view('Paises.create');
    }    

    

    public function store(Request $request)
    {
        $datos = $request->all();
        Paise::create($datos);
        return redirect('/paises');
    }
    
    
    
    public function show($id)
    {
        $pais = Paise::find($id);
        return view('Paises.read')->with('pais', $pais);
    }
    
    
    
    public function edit($id)
    {
        $pais = Paise::find($id);
        return view('Paises.edit')->with('pais', $pais);
    }
    
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $pais = Paise::find($id);
        $pais->update($datos);
        return redirect('/paises');
    }
    
    public function destroy($id)
    {
        //Borrado fisico
        //$pais = Paises::find($id);
        //$pais->destroy($id);
        
        //Borrado lógico
        $pais = Paise::find($id);
        $pais->status = 0;
        $pais->save();
        
        return redirect('/paises');
    }
}
