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
        for ($i = 0; $i < 100; $i++) {
            DB::table('role_user')->insert(array('empresa_id' => $i, 'estado_id' => $i));
        }
    }
}
