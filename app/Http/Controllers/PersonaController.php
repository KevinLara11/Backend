<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona = new Persona();
        return $persona->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $persona = new Persona();
        $persona->primer_persona = $request->primer_persona;
        $persona->segundo_persona = $request->segundo_persona;
        $persona->primera_apellido = $request->primera_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->fecha_creacion = $request->fecha_creacion;
        $persona->fecha_modificacion = $request->fecha_modificacion;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return $persona;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $persona = new persona();
        return $persona->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $persona = Persona::find($id);
        $persona->primer_persona = $request->primer_persona;
        $persona->segundo_persona = $request->segundo_persona;
        $persona->primera_apellido = $request->primera_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->fecha_creacion = $request->fecha_creacion;
        $persona->fecha_modificacion = $request->fecha_modificacion;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return $persona;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return $persona;
    }
}
