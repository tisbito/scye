<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idTipoIdFk');
            $table->unsignedInteger('idEstadoIdFk')->default(1);
            $table->string('identificacion',30);
            $table->string('nombreCliente',150);
            $table->string('direccion');
            $table->string('correo')->unique();
            $table->string('ciudad');
            $table->string('telefono');
            $table->integer('numEmpleados');
            $table->string('userName');
            $table->string('pass');
            $table->foreign('idTipoIdFk')->references('id')->on('tipo_identificacions');
            $table->foreign('idEstadoIdFk')->references('id')->on('estados');
            $table->timestamps();

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
