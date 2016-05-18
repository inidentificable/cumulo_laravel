<?php

use Illuminate\Database\Seeder;
use App\Permiso;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Permiso::create([
                'nombre' => 'Permiso '.$i,
                'descripcion' => 'Este es un permiso '.$i*100,
                'fecha_creacion' => '2016-03-23',
                'estado_activo' => 1,
                'fecha_desactiva' => '2016-03-23',
                'fecha_actualizacion' => '2016-03-23'
            ]);
        }
    }
}
