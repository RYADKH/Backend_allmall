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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('name', 255); // Nom du produit
            $table->decimal('price', 10, 2); // Prix actuel
            $table->decimal('old_price', 10, 2)->nullable(); // Ancien prix (optionnel)
            $table->decimal('reduction', 5, 2)->nullable(); // Pourcentage de réduction (optionnel)
            $table->boolean('availability')->default(true); // Disponibilité du produit (true = en stock, false = épuisé)
            $table->unsignedInteger('quantity')->default(0); // Quantité en stock
            $table->text('description')->nullable(); // Description du produit
            $table->foreignId('sub_category_id')->constrained('sub_categories')->onDelete('cascade'); // Clé étrangère vers sub_categories
            $table->foreignId('store_id')->constrained('stores')->onDelete('cascade'); // Clé étrangère vers stores
            $table->timestamps(); // created_at et updated_at
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
