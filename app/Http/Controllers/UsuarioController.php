<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all();
    }

    public function create(Request $request)
    {
        $usuario = new Usuario();
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->fecha_creacion = $request->fecha_creacion;
        $usuario->fecha_modificacion = $request->fecha_modificacion;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_modificacion = $request->usuario_modificacion;
        $usuario->id_rol = $request->id_rol;
        $usuario->id_persona = $request->id_persona;
        $usuario->save();
        return $usuario;
    }

    public function show($id)
    {
        $usuario = new Usuario();
        return $usuario->find($id);
    }

    public function update($id, Request $request)
    {
        $usuario = Usuario::find($id);
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->fecha_creacion = $request->fecha_creacion;
        $usuario->fecha_modificacion = $request->fecha_modificacion;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_modificacion = $request->usuario_modificacion;
        $usuario->id_rol = $request->id_rol;
        $usuario->id_persona = $request->id_persona;
        $usuario->save();
        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return $usuario;
    }
}
