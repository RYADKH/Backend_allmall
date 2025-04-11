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
        Schema::create('stores', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('name', 255)->unique(); // Nom du store (unique)
            $table->string('image', 500)->nullable(); // URL de l'image du store (optionnel)
            $table->unsignedInteger('followers')->default(0); // Nombre d'abonnés
            $table->unsignedInteger('items_sold')->default(0); // Nombre d'articles vendus
            $table->text('description')->nullable(); // Description du store
            $table->foreignId('delivery_fee_id')->constrained('delivery_fees')->onDelete('cascade'); // Clé étrangère vers delivery_fees
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
