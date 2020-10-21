<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{

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