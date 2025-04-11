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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('shipping_method', 100); // Méthode de livraison (ex: Standard, Express)
            $table->enum('status', ['pending', 'shipped', 'delivered', 'cancelled'])->default('pending'); // Statut de la commande
            $table->timestamp('date')->useCurrent(); // Date de la commande
            $table->decimal('total_amount', 10, 2); // Montant total de la commande
            $table->unsignedInteger('quantity'); // Quantité totale des produits commandés
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
