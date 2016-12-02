<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['id', 'nombre', 'descripcion', 'fecha_creacion', 'activo', 'fecha_inactivo', 'caracter_legal', 'rol_personalidad_juridica'];
    
    public function empresasCreanGrupos()
    {
        return $this->belongsToManyMany('App\Empresa');
    }
    public function gruposCreanProyectos()
    {
        return $this->hasMany('App\Proyecto');
    }
}