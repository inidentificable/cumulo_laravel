<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = ['id', 'fecha_oferta', 'monto_oferta', 'es_aprobada_oferta', 'fecha_aprobada_oferta'];
}
