<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Estado::create([
                'nombre_validador' => 'Validador '.$i,
                'documentacion_entregada' => 0,
                'aprobado' => 0,
                'fecha_aprobado' => '2016-03-23',
                'aprovacion_vigente' => '2016-03-23'
            ]);
        }
    }
}