<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permiso;
use App\Http\Requests;

class PermisoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $permisos = Permiso::paginate(10);
        return view('permiso.todos', ['permisos' => $permisos]);
    }

    public function show($id)
    {
        $permiso = Permiso::find($id);
        if (!is_null($permiso))
            return view('permiso.mostrar', ['permiso' => $permiso->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('permiso.formpermiso');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_creacion' => 'required',
            'estado_activo' => 'required',
            'fecha_desactiva' => 'required',
            'fecha_actualizacion' => 'required'
        ]);

        Permiso::create($request->all());
        return redirect('/permisos');
    }
}
