<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiale;

use Illuminate\Http\RedirectResponse;
class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   /*public function index()
    {
        //
        //$materiales = Materiales::all();
        //var_dump($materiales);
        //die();
        $materialNuevo = new Materiale();
        /*$materialNuevo->nombre = 'Gatito';
        $materialNuevo->descripcion = 'Okas';
        $materialNuevo->status = 1;
        $materialNuevo->save();*/
       // return view('template.masterHeredado');
        /*return view('template.masterHeredado',[
            'materiales'=>$materiales
        ]);*/
   // }

    /**
     * Show the form for creating a new resource.

     * Store a newly created resource in storage.
     */
    public function saveRecord(Request $request)
    {
        //
        $materialNuevo = new Materiale();
        $materialNuevo->nombre = $request->input('nombre');
        $materialNuevo->descripcion = $request->input('descripcion');
        $materialNuevo->status = $request->input('status');
        $materialNuevo->save();
        //csrf_field();
        return "everything oki";
    }

    public function index()
    {
          
        $materiales = Materiale::where('status', 1)
                  ->orderBy('nombre')->get();          


        return view('Materiales.index')->with('materiales', $materiales);
    }
    
    
    
    public function create()
    {
        return view('Materiales.create');
    }    

    

    public function store(Request $request)
    {
        $datos = $request->all();
        Materiale::create($datos);
        return redirect('/materiales');
    }
    
    
    
    public function show($id)
    {
        $material = Materiale::find($id);
        return view('Materiales.read')->with('material', $material);
    }
    
    
    
    public function edit($id)
    {
        $material = Materiale::find($id);
        return view('Materiales.edit')->with('material', $material);
    }
    
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $material = Materiale::find($id);
        $material->update($datos);
        return redirect('/materiales');
    }
    
    public function destroy($id)
    {
        $material = Materiale::find($id);
        $material->status = 0;
        $material->save();
        
        return redirect('/materiales');
    }
}
