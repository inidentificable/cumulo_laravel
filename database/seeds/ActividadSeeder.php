<?php

use Illuminate\Database\Seeder;
use App\Actividad;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Actividad::create([
                'fecha_creada' => '2016-03-23',
                'fecha_revisada' => '2016-03-23',
                'titulo' => 'Actividad '.$i.' prueba',
                'detalle' => 'La actividad '.$i.' de prueba fue generada automáticamente por el seeder de actividad',
                'tipo' => 'Noticia',
                'revisada' => '0',
                'url_imagen' => asset('assets/imagenes/cumulo.jpg')
            ]);
        }
    }
}
