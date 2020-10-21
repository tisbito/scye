<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
                $table->increments('idcursos');
                $table->unsignedInteger('idUsuarioFK');
                $table->foreign('idUsuarioFK')->references('idUsuario')->on('usuarios');
                $table->string('nombreCurso');
                $table->date('fechaSubida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
