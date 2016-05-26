<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Http\Requests;

class ProyectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $proyectos = Proyecto::paginate(10);
        return view('proyecto.todos', ['proyectos' => $proyectos]);
    }

    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        if (!is_null($proyecto))
            return view('proyecto.mostrar', ['proyecto' => $proyecto->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('proyecto.formproyecto');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'esta_activo' => 'required',
            'fecha_desactiva' => 'required',
            'fecha_creacion' => 'required',
            'fecha_inicio_provable' => 'required',
            'fecha_inicio_real' => 'required',
            'fecha_termino_provable' => 'required',
            'fecha_termino_real' => 'required',
            'tir' => 'required',
            'tasa_exigida_pesimista' => 'required',
            'tasa_exigida_moderada' => 'required',
            'tasa_exigida_optimista' => 'required',
            'van' => 'required',
            'presupuesto_inicial' => 'required',
            'presupuesto_licitado' => 'required',
            'presupuesto_aprobado' => 'required',
            'minimo_socios' => 'required',
            'maximo_socios' => 'required',
            'capital_minimo_participacion' => 'required',
            'capital_maximo_participacion' => 'required',
            'porcentaje_minimo_participacion' => 'required',
            'porcentaje_maximo_participacion' => 'required'
        ]);

        Proyecto::create($request->all());
        return redirect('/proyectos');
    }
}
