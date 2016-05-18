<?php

use Illuminate\Database\Seeder;
use App\Licitacion;

class LicitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Licitacion::create([
                'es_privada' => 0,
                'fecha_inicio' => '2016-03-23',
                'fecha_termino' => '2016-03-23',
                'minimo_ofertas' => $i,
                'maximo_ofertas' => $i+5,
                'costo_minimo' => $i*100,
                'costo_maximo' => $i*120,
                'es_desierta' => 0,
                'fecha_desierta' => '2016-03-23'
            ]);
        }
    }
}
