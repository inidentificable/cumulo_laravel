<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['id', 'rut', 'nombre', 'fecha_inicio_actividades', 'fecha_ingreso_sistema', 'telefono', 'comuna', 'ciudad', 'direccion', 'pais', 'clasificacion', 'invitable'];

    public function estado()
    {
        return $this->belongsToMany('App\Estado');
    }

    public function invitados()
    {
        return $this->belongsToMany('App\Empresa', 'empresa_empresa', 'invita_id', 'invitado_id');
    }

    public function invitaciones()
    {
        return $this->belongsToMany('App\Empresa', 'empresa_empresa', 'invitado_id', 'invita_id');
    }
}


