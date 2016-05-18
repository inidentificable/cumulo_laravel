<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Estado extends Model
{
    protected $fillable = ['id', 'nombre_validador', 'documentacion_entregada', 'aprobado', 'fecha_aprobado', 'aprovacion_vigente'];

    public function empresa()
    {
        return $this->belongsToMany('App\Empresa');
    }
}