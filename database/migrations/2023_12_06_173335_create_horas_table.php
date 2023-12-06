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
        Schema::create('horas', function (Blueprint $table) {
            $table->id();
            $table->string('hora');
            $table->unsignedBigInteger('atencion_id');

            $table->foreign('atencion_id')->references('id')->on('atencions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horas');
    }
};
