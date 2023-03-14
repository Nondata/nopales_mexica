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
        Schema::create('recepciones', function (Blueprint $table) {
            $table->id();
            $table->string('encargado');
            $table->string('fecha');
            $table->string('proveedor');
            $table->string('tabla');
            $table->integer('kg_nopal');
            $table->integer('num_cajas');
            $table->string('tamanio');
            $table->string('plagas');
            $table->string('apariencia');
            $table->string('color_verde');
            $table->string('olor');
            $table->string('defectos');
            $table->string('desespinados');
            $table->integer('kg_merma');
            $table->string('rechazo_total');
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
        Schema::dropIfExists('recepciones');
    }
};
