<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function listarMisGrupos()
    {
        $grupos = User::find(1);
        $grupos->misGrupos();
        if (!is_null($grupos)){
            return view('grupo.todos', ['grupos' => $grupos->toArray()]);
        }else{
            return response('no encontrado', 404);
        }
    }
    
    public function listarMisEmpresas()
    {
        $user = User::find(1);
        $empresas = $user->empresasPertenecenUsuario()->paginate(10);
        if (!is_null($empresas)){
            return view('empresa.todos', ['empresas' => $empresas]);
        }else{
            return response('no encontrado', 404);
        }
    }
}
