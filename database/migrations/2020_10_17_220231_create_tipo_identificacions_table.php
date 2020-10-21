<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoIdentificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_identificacions', function (Blueprint $table) {
            $table->increments('idtipoId');
<<<<<<< HEAD
            $table->string('nombreTipoId')->unique();
=======
            $table->string('nombreTipoId');
>>>>>>> 2fe9faf4bab1815451fa0e38f8313a7ac75dda8c
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_identificacions');
        
    }
}
