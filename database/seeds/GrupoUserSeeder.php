<?php

use Illuminate\Database\Seeder;
use App\Grupo;
use App\User;

class GrupoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++) {
            $grupo=Grupo::find(rand(1, 99));
            $user=User::find(rand(1, 99));
            $user->emprendedorParticipaGrupo()->save($grupo);
        }
    }
}
