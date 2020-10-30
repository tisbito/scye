<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->Integer('idCursoFk')->unsigned();
            $table->Integer('idUserFk')->unsigned();
            $table->foreign('idUserFk')->references('id')->on('usuarios');
            $table->foreign('idCursoFk')->references('id')->on('cursos');
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
        Schema::dropIfExists('curso_usuario');
    }
}
