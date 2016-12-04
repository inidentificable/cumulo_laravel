<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;
use App\Http\Requests;

class GrupoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $grupos = Grupo::paginate(10);
        return view('grupo.todos', ['grupos' => $grupos]);
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
        return view('pasos.agruparse.pasouno');
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
