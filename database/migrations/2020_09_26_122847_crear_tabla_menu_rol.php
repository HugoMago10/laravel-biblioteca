<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMenuRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_rol', function (Blueprint $table) {
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol','fk_menurol_rol')->references('id_rol')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_menu');
            $table->foreign('id_menu','fk_menurol_menu')->references('id_menu')->on('menu')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('menu_rol');
    }
}
