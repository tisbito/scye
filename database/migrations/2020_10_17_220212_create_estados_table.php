<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('idEstado');
<<<<<<< HEAD
            $table->string('nombreEstado',20)->unique();
=======
            $table->string('nombreEstado',20);
>>>>>>> 2fe9faf4bab1815451fa0e38f8313a7ac75dda8c
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
