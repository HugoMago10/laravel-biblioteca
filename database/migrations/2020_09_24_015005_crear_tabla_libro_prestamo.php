<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLibroPrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamo', function (Blueprint $table) {
            $table->increments('id_libro_prestamo');
            $table->unsignedInteger('id_libro');
            $table->foreign('id_libro','fk_libroprestamo_libro')->references('id_libro')->on('libro')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario','fk_libroprestamo_usuario')->references('id_usuario')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestado_a',100);
            $table->boolean ('estado');
            $table->date('fecha_devolucion')->nullable();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro_prestamo');
    }
}
