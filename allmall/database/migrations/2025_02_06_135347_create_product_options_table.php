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
        Schema::create('product_options', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('name', 255); // Nom de l'option (ex: Couleur, Taille, Stockage)
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Clé étrangère vers products
            $table->timestamps(); // created_at et updated_at
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_options');
    }
};
