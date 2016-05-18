<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Http\Requests;

class GrupoController extends Controller
{
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupo.todos', ['grupos' => $grupos->toArray()]);
    }

    public function show($id)
    {
        $grupo = Grupo::find($id);
        if (!is_null($grupo))
            return view('grupo.mostrar', ['grupo' => $grupo->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('grupo.formgrupo');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_creacion' => 'required',
            'activo' => 'required',
            'fecha_inactivo' => 'required',
            'caracter_legal' => 'required',
            'rol_personalidad_juridica' => 'required'
        ]);

        Grupo::create($request->all());
        return redirect('/grupos');
    }
}
