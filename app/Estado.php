<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Estado extends Model
{
    protected $fillable = ['id', 'nombre_validador', 'documentacion_entregada', 'aprobado', 'fecha_aprobado', 'aprovacion_vigente'];

    public function estadoUsuario()
    {
        return $this->hasMany('App\User');
    }
    
    public function estadoEmpresa()
    {
        return $this->hasMany('App\Empresa');
    }
    
    public function estadoGrupo()
    {
        return $this->hasMany('App\Grupo');
    }
    
    public function estadoProyecto()
    {
        return $this->hasMany('App\Proyecto');
    }
    
    public function estadoOferta()
    {
        return $this->hasMany('App\Oferta');
    }
}