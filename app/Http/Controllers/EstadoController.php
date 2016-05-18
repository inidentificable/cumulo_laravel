<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Http\Requests;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        return view('estado.todos', ['estados' => $estados->toArray()]);
    }

    public function show($id)
    {
        $estado = Estado::find($id);
        if (!is_null($estado))
            return view('estado.mostrar', ['estado' => $estado->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('estado.formestado');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_validador' => 'required',
            'documentacion_entregada' => 'required',
            'aprobado' => 'required',
            'fecha_aprobado' => 'required',
            'aprovacion_vigente' => 'required'
        ]);

        Estado::create($request->all());
        return redirect('/estados');
    }
}
