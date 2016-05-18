<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Empresa::create([
                'rut' => $i.".000.000-1",
                'nombre' => "Empresa ".$i,
                'fecha_inicio_actividades' => '2016-03-23',
                'fecha_ingreso_sistema' => '2016-03-23',
                'telefono' => $i."999998",
                'comuna' => "Comuna ".$i,
                'ciudad' => "Ciudad ".$i,
                'direccion' => "Direccion ".$i,
                'pais' => "Pais ".$i,
                'clasificacion' => "Clasificacion ".$i
            ]);
        }
    }
}
