<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia', function (Blueprint $table) {
                $table->increments('idMultimedia');
                $table->unsignedInteger('idcursosFK');
                $table->foreign('idcursosFK')->references('idcursos')->on('cursos');
                $table->string('tittle');
                $table->date('fechaCreacion');
                $table->LongText('contenido');
                $table->string('video');
                $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multimedia');
    }
}
