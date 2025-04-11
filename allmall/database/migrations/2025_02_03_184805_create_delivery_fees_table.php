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
        Schema::create('delivery_fees', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('wilaya', 100); // Wilaya (région)
            $table->decimal('price', 10, 2); // Prix de livraison (max 99999999.99)
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_fees');
    }
};
