<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Licitacion;
use App\Http\Requests;

class LicitacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $licitacions = Licitacion::all();
        return view('licitacion.todos', ['licitacions' => $licitacions->toArray()]);
    }

    public function show($id)
    {
        $licitacion = Licitacion::find($id);
        if (!is_null($licitacion))
            return view('licitacion.mostrar', ['licitacion' => $licitacion->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('licitacion.formlicitacion');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'es_privada' => 'required',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required',
            'minimo_ofertas' => 'required',
            'maximo_ofertas' => 'required',
            'costo_minimo' => 'required',
            'costo_maximo' => 'required',
            'es_desierta' => 'required',
            'fecha_desierta' => 'required'
        ]);

        Licitacion::create($request->all());
        return redirect('/licitaciones');
    }
}
