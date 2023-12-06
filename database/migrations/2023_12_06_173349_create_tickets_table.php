<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora');
            $table->string('codigo');
            $table->enum('estado', ['reservado', 'finalizado']);
            $table->string('observacion');
            $table->unsignedBigInteger('afiliado_id');
            $table->unsignedBigInteger('medico_id');

            $table->foreign('afiliado_id')->references('id')->on('afiliados');
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
