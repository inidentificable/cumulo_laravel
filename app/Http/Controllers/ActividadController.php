<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Http\Requests;

class ActividadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $actividades = Actividad::paginate(10);
        return view('actividad.todos', ['actividades' => $actividades]);
    }

    public function show($id)
    {
        $actividad = Actividad::find($id);
        if (!is_null($actividad))
            return view('actividad.mostrar', ['actividad' => $actividad->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('actividad.formactividad');
    }

}
