<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licitacion extends Model
{
    protected $fillable = ['id', 'es_privada', 'fecha_inicio', 'fecha_termino', 'minimo_ofertas', 'maximo_ofertas', 'costo_minimo', 'costo_maximo', 'es_desierta', 'fecha_desierta'];
}