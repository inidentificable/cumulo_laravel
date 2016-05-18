<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['id', 'rut', 'nombre', 'fecha_inicio_actividades', 'fecha_ingreso_sistema', 'telefono', 'comuna', 'ciudad', 'direccion', 'pais', 'clasificacion'];

    public function estado()
    {
        return $this->belongsToMany('App\Estado');
    }
}


