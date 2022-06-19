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
        Schema::create('aeronaves', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen', 2048)->nullable();
            $table->string('tipo');
            $table->string('matricula');
            $table->string('fabricante');
            $table->dateTime('primer_vuelo')->nullable();
            $table->dateTime('introducido')->nullable();
            $table->string('estado');// activo - mantenimiento - desincorporado 
            $table->dateTime('mantenimientoProgramado')->nullable();
            $table->string('usuario');
            $table->string('otros_usuarios')->nullable();
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
        Schema::dropIfExists('aeronaves');
    }
};
