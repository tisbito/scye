<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('estados')->insert([
    		'nombreEstado'=>'Activo'
    	]);

    	DB::table('estados')->insert([
    		'nombreEstado'=>'Inactivo'
    	]);

    }
}
