<?php

use Illuminate\Database\Seeder;
use App\Oferta;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Oferta::create([
                'fecha_oferta' => '2016-03-23',
                'monto_oferta' => $i*100,
                'es_aprobada_oferta' => 0,
                'fecha_aprobada_oferta' => '2016-03-23'
            ]);
        }
    }
}
