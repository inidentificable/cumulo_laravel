<?php

use Illuminate\Database\Seeder;
use App\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            Grupo::create([
                'nombre' => 'Grupo '.$i,
                'descripcion' => 'Este monito compro '.$i.' huevitos...',
                'fecha_creacion' => '2016-03-23',
                'activo' => 0,
                'fecha_inactivo' => '2016-03-23',
                'caracter_legal' => 0,
                'rol_personalidad_juridica' => $i.'00'.($i+1).'22-1'
            ]);
        }
    }
}
