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
                                'WHERE user_empresa.user_id = "' . $user->id . '"'));
        $resultArray = json_decode(json_encode($grupos), true);
        if (!is_null($grupos)) {
            return view('grupo.todosmisgrupos', ['grupos' => $resultArray]);
        } else {
            return response('no encontrado', 404);
        }
        //dd($grupos);
    }

    public function listarMisGruposEmprendedor() {
        $user = User::find(1);
        $grupos = $user->emprendedorParticipaGrupo()->paginate(10);
        //dd($grupos);

        if (!is_null($grupos)) {
            return view('grupo.todos', ['grupos' => $grupos]);
        } else {
            return response('no encontrado', 404);
        }
    }
    
    public function listarMisGruposEmpresa() {
        $user = User::find(1);
        $grupos = $user->emprendedorParticipaGrupo()->paginate(10);
        //dd($grupos);

        if (!is_null($grupos)) {
            return view('grupo.todos', ['grupos' => $grupos]);
        } else {
            return response('no encontrado', 404);
        }
    }

    public function listarMisProyectosEmprendedor() {
        $user = User::find(1);
        $proyectos = $user->emprendedorParticipaGrupo()->gruposCreanProyectos()->paginate(10);

        if (!is_null($proyectos)) {
            return view('proyecto.todos', ['proyectos' => $proyectos]);
        } else {
            return response('no encontrado', 404);
        }
    }

    public function indexEmprendedor() {
        $user = User::find(1);

        $proyectos = \DB::select(\DB::raw('SELECT proyectos.* FROM proyectos ' .
                                'INNER JOIN grupos ON grupos.id = proyectos.grupo_id ' .
                                'INNER JOIN grupo_user ON grupos.id = grupo_user.grupo_id ' .
                                'INNER JOIN users ON grupo_user.user_id = users.id ' .
                                'WHERE users.id = "'. $user->id .'"' .
                                'AND proyectos.esta_activo = 1 ' .
                                'AND users.es_emprendedor = 1'));
        $resultArray = json_decode(json_encode($proyectos), true);
        if (!is_null($proyectos)) {
            return view('homeemprendedor', ['proyectos' => $resultArray]);
        } else {
            return response('no encontrado', 404);
        }
    }
    public function crearGrupoComoEmpresa() {
        $user = User::find(1);
        $empresas = $user->empresasPertenecenUsuario()->paginate(5);
        if (!is_null($empresas)) {
            return view('pasos.agruparse.pasodos', ['empresas' => $empresas]);
        } else {
            return response('no encontrado', 404);
        }
    }

}
