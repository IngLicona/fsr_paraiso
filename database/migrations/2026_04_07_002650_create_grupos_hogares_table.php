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
        Schema::create('grupos_hogares', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_grupo_hogar');
            $table->string('lider');
            $table->string('direccion');
            $table->string('reunion');
            $table->integer('edad')->nullable();
            $table->string('contacto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos_hogares');
    }
};
