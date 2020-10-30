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
            $table->increments('id');
            $table->unsignedInteger('idRegClienteFk');
            $table->unsignedInteger('idTipoIdFk');
            $table->unsignedInteger('idTipoUserFk');
            $table->unsignedInteger('idEstadoFk');
            $table->string('nombreUsuario',150);
            $table->string('apellidoUsuario',150);
            $table->string('documentoUsuario',150);
            $table->string('correo',150)->unique();
            $table->string('pass');
            $table->string('userName');
            $table->foreign('idRegClienteFk')->references('id')->on('clientes');
            $table->foreign('idTipoIdFk')->references('id')->on('tipo_identificacions');
            $table->foreign('idEstadoFk')->references('id')->on('estados')->default(1);
            $table->foreign('idTipoUserFk')->references('id')->on('tipo_usuarios');
            $table->timestamps();
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
