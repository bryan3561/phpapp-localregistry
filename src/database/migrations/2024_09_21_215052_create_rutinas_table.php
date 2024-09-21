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
        Schema::create('rutinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('ejercicio_rutina', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rutina_id')->constrained('rutinas');
            $table->foreignId('ejercicio_id')->constrained('ejercicios');
            $table->integer('series');
            $table->integer('repeticiones');
            $table->decimal('peso_sugerido', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutinas');
    }
};
