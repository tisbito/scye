<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        //$tipoid = DB::select('SELECT idTipoUser from tipo_usuarios WHERE nombreTipoUser = ?', ['Super Usuario']);
/*
        $tipoid = DB::table('tipo_usuarios')->select('idTipoUser')->first();

   
        DB::table('registro_usuarios')->insert([
            'user'=>'ccastri',
        ]);

        DB::table('registro_usuarios')->insert([
           'pass'=>'12345',
        ]);

        DB::table('registro_usuarios')->insert([

        	'idTipoFk'=>$tipoid->idTipoUser,
        ]);

*/
    }
}
