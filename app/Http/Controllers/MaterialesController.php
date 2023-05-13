<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiales;
use Illuminate\Http\RedirectResponse;
class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$materiales = Materiales::all();
        //var_dump($materiales);
        //die();
        $materialNuevo = new Materiales();
        /*$materialNuevo->nombre = 'Gatito';
        $materialNuevo->descripcion = 'Okas';
        $materialNuevo->status = 1;
        $materialNuevo->save();*/
        return view('template.masterHeredado');
        /*return view('template.masterHeredado',[
            'materiales'=>$materiales
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
        //
        return view('template.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveRecord(Request $request)
    {
        //
        $materialNuevo = new Materiales();
        $materialNuevo->nombre = $request->input('nombre');
        $materialNuevo->descripcion = $request->input('descripcion');
        $materialNuevo->status = $request->input('status');
        $materialNuevo->save();
        //csrf_field();
        return "everything oki";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
