<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empaques', function (Blueprint $table) {
            $table->id();
            $table->string('encargado');
            $table->string('fecha');
            $table->string('nombre_empaco');
            $table->string('tipo_producto');
            $table->string('color');
            $table->integer('cajas');
            $table->integer('piezas');
            $table->integer('fugas');
            $table->integer('burbuja');
            $table->integer('sello');
            $table->integer('rechazo');
            $table->string('lote');
            $table->string('caducidad');
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('empaques');
    }
};
