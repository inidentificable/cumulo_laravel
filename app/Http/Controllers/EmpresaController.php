<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Grupo;
use App\User;
use App\Http\Requests;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $empresas = Empresa::paginate(10);
        return view('empresa.todos', ['empresas' => $empresas]);
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);
        if (!is_null($empresa))
            return view('empresa.mostrar', ['empresa' => $empresa->toArray()]);
        else
            return response('no encontrado', 404);
    }

    public function create()
    {
        return view('empresa.formempresa');
    }

    public function invitarEmpresas()
    {
        $empresas = Empresa::where('invitable', 1)->paginate(10);
        return view('empresa.todos', ['empresas' => $empresas]);
    }

    public function obtenerInvitados($id)
    {
        $empresa = Empresa::find($id);
        if (!is_null($empresa)){
            return view('empresa.invitacion.todos', ['empresas' => $empresa->invitados->toArray()]);
        }else{
            return response('no encontrado', 404);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'rut' => 'required',
            'nombre' => 'required',
            'fecha_inicio_actividades' => 'required',
            'fecha_ingreso_sistema' => 'required',
            'telefono' => 'required',
            'comuna' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'pais' => 'required',
            'clasificacion' => 'required',
            'invitable' => 'required'
        ]);

        Empresa::create($request->all());
        return redirect('/empresas');
    }
    
    public function crearGrupoDeEmpresa($id)
    {
        $empresa = Empresa::find($id);
        if (!is_null($empresa)){
            return view('pasos.agruparse.pasotres', ['empresa' => $empresa]);
        }else{
            return response('no encontrado', 404);
        }
    }
    
    public function guardarGrupoDeEmpresa(Request $request, $id)
    {
        $usuario=User::find(1);
        $empresa = Empresa::find($id);
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_creacion' => 'required',
            'activo' => 'required',
            'fecha_inactivo' => 'required',
            'caracter_legal' => 'required',
            'rol_personalidad_juridica' => 'required'
        ]);
        $grupo = Grupo::create($request->all());
        $grupo;
        $empresa->gruposPertenecenEmpresa()->attach($grupo->id);
        if (!is_null($grupo)){
            return view('pasos.agruparse.pasocuatro', ['grupo' => $grupo, 'usuario' => $usuario, 'empresa' => $empresa]);
        }else{
            return response('no encontrado', 404);
        }
    }
    
    public function listarGruposEmpresa($empresaId)
    {
        $empresa = Empresa::find($empresaId);
        $grupos = $empresa->gruposPertenecenEmpresa()->paginate(10);
        if (!is_null($grupos)){
            return view('grupo.todos', ['grupos' => $grupos]);
        }else{
            return response('no encontrado', 404);
        }
    }

}
