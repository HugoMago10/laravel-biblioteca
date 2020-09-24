<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol','fk_permisorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_permiso');
            $table->foreign('id_permiso','fk_permisorol_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_rol');
    }
}
