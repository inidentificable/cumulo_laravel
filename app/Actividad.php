<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['id', 'fecha_creada', 'fecha_revisada', 'titulo', 'detalle', 'tipo', 'revisada', 'url_imagen'];
}
