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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->unsignedTinyInteger('rate'); // Note (ex: 1 à 5 étoiles)
            $table->unsignedInteger('likes')->default(0); // Nombre de likes
            $table->unsignedInteger('dislikes')->default(0); // Nombre de dislikes
            $table->text('text')->nullable(); // Avis textuel (optionnel)
            $table->timestamp('date')->useCurrent(); // Date de création de l'avis
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
