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
        Schema::create('produccions', function (Blueprint $table) {
            $table->id();
            $table->string('encargado');
            $table->string('fecha');
            $table->integer('num_personas');
            $table->integer('gas_inicio');
            $table->integer('gas_final');
            $table->integer('kg_nopal');
            $table->string('tamano_nopal');
            $table->string('realizaron_lavado');
            $table->integer('num_marmitas');
            $table->string('temperatura');
            $table->string('color_sello');
            $table->string('realizaron_sellado');
            $table->string('choque_termico');
            $table->string('gramaje_producto');
            $table->integer('kg_merma');
            $table->string('observaciones');
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
        Schema::dropIfExists('produccion');
    }
};
