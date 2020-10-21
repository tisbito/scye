<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
<<<<<<< HEAD

=======
    /**
     * Run the migrations.
     *
     * @return void
     */
>>>>>>> 2fe9faf4bab1815451fa0e38f8313a7ac75dda8c
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idClientes');
            $table->unsignedInteger('idTipoIdFk');
            $table->unsignedInteger('idEstadoIdFk');
            $table->foreign('idTipoIdFk')->references('idtipoId')->on('tipo_identificacions');
            $table->foreign('idEstadoIdFk')->references('idEstado')->on('estados');
            $table->string('nombreCliente',150);
            $table->string('idenficacion',30);
            $table->timestamp('fechaRegCliente');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
