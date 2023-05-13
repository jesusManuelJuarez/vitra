<?php

namespace App\Http\Controllers;

use App\Models\transporte;

use Illuminate\Http\Request;

class transporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transportes = transporte::all();
        return $transportes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $transportes = new transporte();

        $transportes->nombreEmpresa = $request->nombreEmpresa;
        $transportes->transmision = $request->transmision;
        $transportes->ac = $request->ac;
        $transportes->numAsientos = $request->numAsientos;
        $transportes->modelo = $request->modelo;
        $transportes->precio = $request->precio;
        $transportes->detalles= $request->detalles;
        $transportes->disponible = $request->disponible;
        $transportes->save();
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
    public function update(Request $request)
    {
         //
         $transportes = transporte::findOrFail($request->id);

         $transportes->nombreEmpresa = $request->nombreEmpresa;
         $transportes->transmision = $request->transmision;
         $transportes->ac = $request->ac;
         $transportes->numAsientos = $request->numAsientos;
         $transportes->modelo = $request->modelo;
         $transportes->precio = $request->precio;
         $transportes->detalles= $request->detalles;
         $transportes->disponible = $request->disponible;
         $transportes->save();
         return $transportes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $transportes = transporte::destroy($request->id);

        return $transportes;
    }
}
