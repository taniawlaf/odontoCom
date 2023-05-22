<?php

namespace App\Http\Controllers;

use App\Models\Materiales;
use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Materiale;
use App\Models\Usuario;

class InventarioController extends Controller
{
    //
   /* public function inventario_control()
	{
		$inventarios=Inventario::with(['materiale','usuario'])->get();
		return view('template.inventario1', ['arrayInventarios'=>$inventarios]);
	}**/

	public function index()
    {
        $inventario = Inventario::where('status', 1)
                  ->orderBy('id_material')
                  ->orderBy('id_usuario')->get();          
        return view('Inventarios.index')->with('inventarios', $inventario);
    }
    
    
    public function create()
    {
        $materiales = Materiale::select('id','nombre')
                  ->orderBy('nombre')->get();
        $usuarios = Usuario::select('id','nombre')
                  ->orderBy('nombre')->get();          
        return view('Inventarios.create')
                ->with('materiales',$materiales)
                ->with('usuarios',$usuarios);
    }
    
    
    public function store(Request $request)
    {
        $datos = $request->all();
        Inventario::create($datos);
        return redirect('/inventario');
    }
    
    
    public function show($id)
    {
        $inventario = Inventario::find($id);
        return view('Inventarios.read')->with('inventario', $inventario);
    }
    
    
    public function edit($id)
    {
        $inventario = Inventario::find($id);
        $materiales = Materiale::select('id','nombre')
                  ->orderBy('nombre')->get();
        $usuarios = Usuario::select('id','nombre')
                  ->orderBy('nombre')->get();           
        return view('Inventarios.edit')
               ->with('inventarios', $inventario)
               ->with('materiales',$materiales)
               ->with('usuarios',$usuarios);
    }
    
    
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $inventario = Inventario::find($id);
        $inventario->update($datos);
        return redirect('/inventario');
    }
    
    
    public function destroy($id)
    {
        $inventario = Inventario::find($id);
        $inventario->status = 0;
        $inventario->save();
        return redirect('/inventario');
    }
}
