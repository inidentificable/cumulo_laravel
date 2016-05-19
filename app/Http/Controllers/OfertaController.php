<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\Http\Requests;

class OfertaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ofertas = Oferta::all();
        return view('oferta.todos', ['ofertas' => $ofertas->toArray()]);
    }

    public function show($id)
    {
        $oferta = Oferta::find($id);
        if (!is_null($oferta))
            return view('oferta.mostrar', ['oferta' => $oferta->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('oferta.formoferta');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fecha_oferta' => 'required',
            'monto_oferta' => 'required',
            'es_aprobada_oferta' => 'required',
            'fecha_aprobada_oferta' => 'required'
        ]);

        Oferta::create($request->all());
        return redirect('/ofertas');
    }
}

