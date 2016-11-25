php A<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmpresaSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(LicitacionSeeder::class);
        $this->call(OfertaSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(ProyectoSeeder::class);
        $this->call(EmpresaEstadoSeeder::class);
        $this->call(EmpresaEmpresaSeeder::class);
        //$this->call(ProductoSeeder::class);
        $this->call(ActividadSeeder::class);
    }
}
