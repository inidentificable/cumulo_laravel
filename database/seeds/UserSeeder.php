<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        User::create(['rut' => '16.488.471-6', 'name' => 'Claudio Reyes', 'email' => 'claudio.reyes.miranda@gmail.com', 'username' => 'inidentificable', 'password' => 'P2l141987', 'es_emprendedor' => '1', 'es_empresario' => '1', 'es_inversionista' => '1', 'es_incubadora' => '1', 'url_imagen' => asset('assets/imagenes/1_profile.jpg'), 'bio' => 'Socio y co-founder de Cúmulo SpA, Gerente General']);
        $binario=1;
        $binarioAlt=0;
        for ($i=0; $i<100; $i++) {
            User::create([
                'rut' => $i.'.000.000-1',
                'name' => 'Usuario '.$i.'esimo',
                'email' => 'usuario'.$i.'@cumulo.cl',
                'username' => 'usuario'.$i,
                'password' => $i."a",
                'es_emprendedor' => '"'.$binario.'"',
                'es_empresario' => '"'.$binarioAlt.'"',
                'es_inversionista' => '"'.$binarioAlt.'"',
                'es_incubadora' => '"'.$binarioAlt.'"',
                'url_imagen' => asset('assets/imagenes/cumulo.jpg'),
                'bio' => 'Me defino como un usuario muy '.$i.' mi interes es emprender de '.$i.' en '.$i
            ]);
            if($binario==1){
                $binario=0;
                $binarioAlt=1;
            }else{
                $binario=1;
                $binarioAlt=0;
            }
        }
    }
}
