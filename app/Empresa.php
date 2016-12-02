<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['id', 'rut', 'nombre', 'fecha_inicio_actividades', 'fecha_ingreso_sistema', 'telefono', 'comuna', 'ciudad', 'direccion', 'pais', 'clasificacion', 'invitable'];

    public function usuariosRepresentanEmpresa()
    {
        return $this->belongsToMany('App\User','user_empresa','empresa_id','user_id');
    }
    
    public function gruposPertenecenEmpresa()
    {
        return $this->hasMany('App\Grupo');
    }
    
    public function estadoActualEmpresa()
    {
        return $this->belongsTo('App\Estado');
    }

    public function empresasInvitadas()
    {
        return $this->hasMany('App\Empresa', 'empresa_empresa', 'invita_id', 'invitado_id');
    }

    public function invitacionesRecibidasEmpresas()
    {
        return $this->belongsToMany('App\Empresa', 'empresa_empresa', 'invitado_id', 'invita_id');
    }
        
}


