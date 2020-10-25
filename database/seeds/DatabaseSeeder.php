<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        $this->borradoTablas([
    		'tipo_usuarios',
    		'tipo_identificacions',
    		'estados',
    	]);

    	$this->call(TipoUserSeed::class);
    	$this->call(EstadoSeeder::class);
        $this->call(IdSeeder::class);


    }

    protected function borradoTablas(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		foreach ($tables as $table) {
			DB::table($table)->truncate();
		}
			
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // $this->call(UserSeeder::class);

    }
}
