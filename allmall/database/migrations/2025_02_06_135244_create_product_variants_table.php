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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('variant_name', 255); // Nom de la variante (ex: Couleur, Taille)
            $table->decimal('price', 10, 2)->nullable(); // Prix optionnel pour cette variante
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Produit lié
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
