<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = ['id', 'nombre', 'descripcion', 'fecha_creacion', 'estado_activo', 'fecha_desactiva', 'fecha_actualizacion'];
}