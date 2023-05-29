<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\ArchivosTratamiento;
use App\Models\Tratamiento;


class Archivos_TratamientosController extends Controller
{
    //
    /*public function index()
    {
        $archivosTratamientos = ArchivosTratamiento::where('status', 1)
        ->orderBy('tratamiento')->get();
        
    }*/
    public function index()
    {
        $archivosTratamientos = ArchivosTratamiento::where('status', 1)
                  ->orderBy('id_tratamiento')->get();          
        return view('Archivos_tratamientos.index')->with('archivosTratamientos', $archivosTratamientos);
    }
    
    
    public function create()
    {
        $tratamiento = Tratamiento::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Archivos_tratamientos.create')
                ->with('tratamiento',$tratamiento);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        $hora = date("h:i:s");
        $fecha = date("d-m-Y");
        $prefijo = $fecha."_". $hora;
        $archiv = $request-> file('archivo');
        $nombre_archiv = $archiv->getClientOriginalName();
        $rl = Storage::disk('archivos')->put($nombre_archiv, \File::get($archiv));
        if ($rl) {
            $datos['ruta']=$nombre_archiv;
            ArchivosTratamiento::create($datos);
            return redirect('/archivosTratamientos');
        } else {
            return "Error al guardar la foto";
        }
        
    }
    
    
    
    public function show($id)
    {
        $archivosTratamientos = ArchivosTratamiento::find($id);
        return view('Archivos_tratamientos.read')->with('archivosTratamientos', $archivosTratamientos);
    }
    
    
    public function edit($id)
    {
        $archivosTratamientos = ArchivosTratamiento::find($id);
        $tratamiento = tratamiento::select('id','nombre')
                  ->orderBy('nombre')->get();
        return view('Archivos_tratamientos.edit')
               ->with('archivosTratamientos', $archivosTratamientos)
               ->with('tratamiento',$tratamiento);
    }
    
    
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $archiv = ArchivosTratamiento::find($id);
        $hora = date("h:i:s");
        $fecha = date("d-m-Y");
        $prefijo = $fecha."_". $hora;
        $archivo= $request-> file('archivo');
        $nombre_archiv = $archivo->getClientOriginalName();
        $rl = Storage::disk('archivos')->put($nombre_archiv, \File::get($archivo));
        if ($rl) {
            $datos['ruta']=$nombre_archiv;
            $archiv->update($datos);
            return redirect('/archivosTratamientos');
        } else {
            return "Error al guardar la foto";
        }
    
    }
    
    
    public function destroy($id)
    {
        $archivosTratamientos= ArchivosTratamiento::find($id);
        $archivosTratamientos->status = 0;
        $archivosTratamientos->save();
        return redirect('/archivosTratamientos');
    }


}
