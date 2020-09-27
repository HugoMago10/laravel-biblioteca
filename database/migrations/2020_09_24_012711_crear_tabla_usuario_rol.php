<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->increments('id_usuario_rol');
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol','fk_usuariorol_rol')->references('id_rol')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario','fk_usuariorol_usuario')->references('id_usuario')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('estado');
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
        Schema::dropIfExists('usuario_rol');
    }
}
