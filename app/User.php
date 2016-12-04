<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'rut', 'email', 'username', 'password','es_emprendedor', 'es_empresario', 'es_inversionista', 'es_incubadora', 'es_interno', 'url_imagen', 'bio'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function estadoActualUsuario()
    {
        return $this->belongsTo('App\Estado');
    }
    
    public function empresasPertenecenUsuario()
    {
        return $this->belongsToMany('App\Empresa','user_empresa','user_id','empresa_id');
    }
    
    public function emprendedorParticipaGrupo()
    {
        return $this->belongsToMany('App\Grupo','grupo_user','user_id','grupo_id')->where('activo', '=', 1);
    }
    
    public function empresaParticipaGrupo()
    {
        return $this->belongsToMany('App\Grupo','grupo_user','user_id','grupo_id')->where('activo', '=', 1);
    }
}