<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('tipo_usuarios')->insert([
        	'nombreTipoUser' => 'Super Usuario',
        ]);

         DB::table('tipo_usuarios')->insert([
        	'nombreTipoUser' => 'Administrador',
        ]);

         DB::table('tipo_usuarios')->insert([
         'nombreTipoUser' => 'Usuario',
        ]);
         DB::table('tipo_usuarios')->insert([
         'nombreTipoUser' => 'Invitado',
        ]);
    }
}
