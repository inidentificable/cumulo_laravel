<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UserController extends Controller {

    public function listarMisEmpresas() {
        $user = User::find(1);
        $empresas = $user->empresasPertenecenUsuario()->paginate(10);
        if (!is_null($empresas)) {
            return view('empresa.todos', ['empresas' => $empresas]);
        } else {
            return response('no encontrado', 404);
        }
    }
       
    public function listarMisGrupos() {
        $user = User::find(1);
        
        $grupos = \DB::select(\DB::raw('SELECT grupos.* ' .
                        'FROM grupos ' .
                        'INNER JOIN empresa_grupo ON grupos.id=empresa_grupo.grupo_id ' .
                        'INNER JOIN user_empresa ON empresa_grupo.empresa_id=user_empresa.empresa_id ' .
                        'WHERE user_empresa.user_id = "'.$user->id.'"'));
        $resultArray = json_decode(json_encode($grupos), true);
        if (!is_null($grupos)) {
            return view('grupo.todosmisgrupos', ['grupos' => $resultArray]);
        } else {
            return response('no encontrado', 404);
        }
        //dd($grupos);
    }

}
