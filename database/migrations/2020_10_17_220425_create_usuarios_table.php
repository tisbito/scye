<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUser');
            $table->unsignedInteger('idRegClienteFk');
            $table->unsignedInteger('idTipoIdFk');
            $table->unsignedInteger('idTipoUserFk');
            $table->unsignedInteger('idEstadoFk');
            $table->foreign('idRegClienteFk')->references('idClientes')->on('clientes');
            $table->foreign('idTipoIdFk')->references('idtipoId')->on('tipo_identificacions');
            $table->foreign('idEstadoFk')->references('idEstado')->on('estados');
            $table->foreign('idTipoUserFk')->references('idTipoUser')->on('tipo_usuarios');
            $table->string('nombreUsuario',150);
            $table->string('apellidoUsuario',150);
            $table->string('documentoUsuario',150);
            $table->string('correo',150)->unique();
            $table->string('pass');
            $table->string('userName');
        });
    }

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
