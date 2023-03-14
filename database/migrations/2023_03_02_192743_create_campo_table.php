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
        Schema::create('campos', function (Blueprint $table) {
            $table->id();
            $table->string('encargado');
            $table->string('fecha');
            $table->string('actividad_a_realizar');
            $table->integer('cantidad_cajas');
            $table->string('presentacion');
            $table->string('zona_de_corte');
            $table->string('trazabilidad')->nullable();
            $table->string('realizo');
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
        Schema::dropIfExists('campo');
    }
};
