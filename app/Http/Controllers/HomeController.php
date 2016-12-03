<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Licitacion;
use App\Oferta;
use App\Actividad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licitacions = Licitacion::paginate(3);
        $ofertas = Oferta::paginate(3);
        $actividades = Actividad::paginate(5);
        return view('home', ['licitacions' => $licitacions, 'ofertas' => $ofertas, 'actividades' => $actividades]);
    }
}
