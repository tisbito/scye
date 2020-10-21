<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_identificacions')->insert([
    		'nombreTipoId'=>'Registro Civil',
    	]);

    	 DB::table('tipo_identificacions')->insert([
    		'nombreTipoId'=>'Tarjeta Identidad',
    	]);

   		DB::table('tipo_identificacions')->insert([
    		'nombreTipoId'=>'Cédula Ciudadania',
    	]);

    	DB::table('tipo_identificacions')->insert([
    		'nombreTipoId'=>'Cédula Extrangería',
    	]);

    	DB::table('tipo_identificacions')->insert([
    		'nombreTipoId'=>'Pasaporte',
    	]);

		DB::table('tipo_identificacions')->insert([
    		'nombreTipoId'=>'Nit',
    	]);
    }
}
