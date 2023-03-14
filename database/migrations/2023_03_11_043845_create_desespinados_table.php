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
        Schema::create('desespinados', function (Blueprint $table) {
            $table->id();
            $table->string('encargado');
            $table->string('fecha');
            $table->string('nombre');
            $table->integer('kg_pelados');
            $table->integer('piezas');
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
        Schema::dropIfExists('desespinados');
    }
};
