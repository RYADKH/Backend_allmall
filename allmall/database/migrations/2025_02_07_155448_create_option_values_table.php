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
        Schema::create('option_values', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('value', 255); // Valeur de l'option (ex: Rouge, XL, 128 Go)
            $table->foreignId('product_option_id')->constrained('product_options')->onDelete('cascade'); // Clé étrangère vers product_options
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_values');
    }
};
