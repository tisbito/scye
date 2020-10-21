<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{

<<<<<<< HEAD

=======
     * @return void
     */
>>>>>>> 2fe9faf4bab1815451fa0e38f8313a7ac75dda8c
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->unsignedInteger('idRegUserFk');
            $table->unsignedInteger('idRegClienteFk');
            $table->unsignedInteger('idTipoIdFk');
            $table->unsignedInteger('idEstadoFk');
            $table->foreign('idRegUserFk')->references('idregistro')->on('registro_usuarios');
            $table->foreign('idRegClienteFk')->references('idClientes')->on('clientes');
            $table->foreign('idTipoIdFk')->references('idtipoId')->on('tipo_identificacions');
            $table->foreign('idEstadoFk')->references('idEstado')->on('estados');
            $table->string('nombreUsuario',150);
            $table->string('apellidoUsuario',150);
            $table->string('documentoUsuario',150);
            $table->string('correo',150)->unique();
            $table->timestamp('fechaRegUsuario');
        });
    }

<<<<<<< HEAD


=======
     * @return void
     */
>>>>>>> 2fe9faf4bab1815451fa0e38f8313a7ac75dda8c
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
