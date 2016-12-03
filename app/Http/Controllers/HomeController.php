<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Licitacion;
use App\Oferta;
use App\Actividad;
use App\Proyecto;
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
    public function indexEmprendedor()
    {
        $proyectos = Proyecto::paginate(4);
        return view('homeemprendedor', ['proyectos' => $proyectos]);
    }
    public function indexEmpresario()
    {
        $licitacions = Licitacion::paginate(5);
        $ofertas = Oferta::paginate(5);
        $actividades = Actividad::paginate(4);
        return view('homeempresario', ['licitacions' => $licitacions, 'ofertas' => $ofertas, 'actividades' => $actividades]);
    }
    public function indexInversionista()
    {
        $licitacions = Licitacion::paginate(5);
        $ofertas = Oferta::paginate(5);
        $actividades = Actividad::paginate(4);
        return view('homeinversionista', ['licitacions' => $licitacions, 'ofertas' => $ofertas, 'actividades' => $actividades]);
    }
    public function indexIncubadora()
    {
        $proyectos = Proyecto::paginate(5);
        return view('homeincubadora', ['proyectos' => $proyectos]);
    }
    public function indexInterno()
    {
        $licitacions = Licitacion::paginate(5);
        $ofertas = Oferta::paginate(5);
        $actividades = Actividad::paginate(4);
        return view('homeinterno', ['licitacions' => $licitacions, 'ofertas' => $ofertas, 'actividades' => $actividades]);
    }
}
