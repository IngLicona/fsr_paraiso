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
        Schema::table('grupos_hogares', function (Blueprint $table) {
            $table->enum('tipo_hogar', ['jovenes', 'adultos'])->after('id');
            $table->string('edad')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grupos_hogares', function (Blueprint $table) {
            $table->dropColumn('tipo_hogar');
            $table->integer('edad')->nullable()->change();
        });
    }
};
