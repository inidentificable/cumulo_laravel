<?php

use Illuminate\Database\Seeder;

class EmpresaEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 50; $i++) {
            DB::table('empresa_estado')->insert(array('empresa_id' => $i, 'estado_id' => $i));
        }
    }
}
