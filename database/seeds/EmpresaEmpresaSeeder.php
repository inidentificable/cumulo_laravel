<?php

use Illuminate\Database\Seeder;

class EmpresaEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 10; $i <= 60; $i++) {
            DB::table('empresa_empresa')->insert(array('invita_id' => $i, 'invitado_id' => 80 - $i, 'mensaje' => '"Hola, te invito a formar parte de mi grupo."', 'respuesta' => '"!Ya!, !que rico, buena onda!"', 'resultado' => 1));
        }
    }
}
