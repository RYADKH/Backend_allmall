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
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('url', 500); // URL de l'image
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Clé étrangère vers products
            $table->timestamps(); // created_at et updated_at
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
