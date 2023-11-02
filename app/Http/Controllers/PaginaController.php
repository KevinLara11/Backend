<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagina = new Pagina();
        return $pagina->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $pagina = new Pagina();
        $pagina->nombre = $request->nombre;
        $pagina->estado = $request->estado;
        $pagina->descripcion = $request->descripcion;
        $pagina->icono = $request->icono;
        $pagina->tipo = $request->tipo;
        $pagina->url = $request->url;
        $pagina->fecha_creacion = $request->fecha_creacion;
        $pagina->fecha_modificacion = $request->fecha_modificacion;
        $pagina->usuario_creacion = $request->usuario_creacion;
        $pagina->usuario_modificacion = $request->usuario_modificacion;
        $pagina->save();
        return $pagina;
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
        $pagina = new Pagina();
        return $pagina->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pagina $pagina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $pagina = Pagina::find($id);
        $pagina->nombre = $request->nombre;
        $pagina->estado = $request->estado;
        $pagina->descripcion = $request->descripcion;
        $pagina->icono = $request->icono;
        $pagina->tipo = $request->tipo;
        $pagina->url = $request->url;
        $pagina->fecha_creacion = $request->fecha_creacion;
        $pagina->fecha_modificacion = $request->fecha_modificacion;
        $pagina->usuario_creacion = $request->usuario_creacion;
        $pagina->usuario_modificacion = $request->usuario_modificacion;
        $pagina->save();
        return $pagina;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pagina = Pagina::find($id);
        $pagina->delete();
        return $pagina;
    }
}
