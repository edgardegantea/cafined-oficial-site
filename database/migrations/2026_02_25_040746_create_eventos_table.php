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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            // Enum para diferenciar tipos: taller, curso, conferencia
            $table->enum('type', ['workshop', 'course', 'conference', 'other']);
            $table->integer('capacity')->nullable(); // Opcional: límite de cupo
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Tabla pivote para inscripciones
        Schema::create('event_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->timestamp('registered_at')->useCurrent();

            // Evitar duplicados: un usuario solo se inscribe una vez al mismo evento
            $table->unique(['user_id', 'event_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
