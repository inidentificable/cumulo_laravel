<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Producto;*/
use App\Http\Requests;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /*$productos = Producto::paginate(10);
        return view('producto.todos', ['productos' => $productos]);*/
    }

    /*public function show($id)
    {
        $producto = Producto::find($id);
        if (!is_null($producto))
            return view('producto.mostrar', ['producto' => $producto->toArray()]);
        else
            return response('no encontrado', 404);
    }
    */

    public function create()
    {
        return view('producto.formproducto');
    }

    public function store(Request $request)
    {
        $request->file('foto1')->move(public_path('AlmacenamientoLocal'), $request->input('codigo') . '.jpg');
    }
}
