<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->increments('idTipoUser');
            $table->string('nombreTipoUser',50)->unique();


        });

        Schema::create('registro_usuarios', function (Blueprint $table) {
            $table->increments('idregistro');        
            $table->string('user',50);
            $table->string('pass',50);
            $table->timestamp('fecha_registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_usuarios');
        Schema::dropIfExists('registro_usuarios');
    }
}
