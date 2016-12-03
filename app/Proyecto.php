<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['id', 'nombre', 'descripción', 'url_imagen', 'link_externo', 'esta_activo', 'fecha_desactiva', 'fecha_creacion', 'fecha_inicio_provable', 'fecha_inicio_real', 'fecha_termino_provable', 'fecha_termino_real', 'tir', 'tasa_exigida_pesimista', 'tasa_exigida_moderada', 'tasa_exigida_optimista', 'van', 'presupuesto_inicial', 'presupuesto_licitado', 'presupuesto_aprobado', 'minimo_socios', 'maximo_socios', 'capital_minimo_participacion', 'capital_maximo_participacion', 'porcentaje_minimo_participacion', 'porcentaje_maximo_participacion'];
    
    public function proyectosCreadosPorGrupo()
    {
        return $this->belongsTo('App\Grupo');
    }
    
    public function proyectosCreanLicitaciones()
    {
        return $this->hasMany('App\Licitacion');
    }
    
}