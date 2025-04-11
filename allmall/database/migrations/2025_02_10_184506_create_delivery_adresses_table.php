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
        Schema::create('delivery_adresses', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255);
            $table->string('phone_number', 20);
            $table->string('state', 100);
            $table->string('city', 100);
            $table->string('street', 255);
            $table->string('zip_code', 20);
            $table->timestamps(); // Ajoute created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_adresses');
    }
};
