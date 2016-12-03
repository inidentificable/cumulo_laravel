<?php

use Illuminate\Database\Seeder;
use App\Proyecto;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Proyecto::create([
                'nombre' => 'Proyecto '.$i,
                'descripcion' => 'El Proyecto '.$i.' es un proyecto que se genera automáticamente con el Seeder de Laravel'.
                'revisa el link externo que hemos agregado para que veas las historias de usuario de nuestro proyecto, gracias por visitarnos',
                'url_imagen' => asset('/assets/imagenes/client.jpg'),
                'link_externo' => asset('/assets/documentos/HistoriasUsuarioCumulo.xlsx'),
                'esta_activo' => 0,
                'fecha_desactiva' => '2016-03-27',
                'fecha_creacion' => '2016-03-23',
                'fecha_inicio_provable' => '2016-03-23',
                'fecha_inicio_real' => '2016-03-27',
                'fecha_termino_provable' => '2016-04-23',
                'fecha_termino_real' => '2016-04-27',
                'tir' => 0.01*$i,
                'tasa_exigida_pesimista' => 0.01*$i+2,
                'tasa_exigida_moderada' => 0.01*$i+5,
                'tasa_exigida_optimista' => 0.01*$i+10,
                'van' => 0.01*$i,
                'presupuesto_inicial' => 99*$i,
                'presupuesto_licitado' => 120*$i,
                'presupuesto_aprobado' => 85*$i,
                'minimo_socios' => $i,
                'maximo_socios' => $i+4,
                'capital_minimo_participacion' => 999*$i,
                'capital_maximo_participacion' => 9999*$i,
                'porcentaje_minimo_participacion' => 0.01*$i+4,
                'porcentaje_maximo_participacion' => 0.01*$i+11
            ]);
        }
    }
}
