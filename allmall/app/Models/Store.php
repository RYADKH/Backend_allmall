<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'followers',
        'items_sold',
        'description',
        'delivery_fee_id', // Clé étrangère vers delivery_fees
    ];

    // Relation avec StoreOwner (Un store appartient à un propriétaire)
    public function storeOwner()
    {
        return $this->hasOne(StoreOwner::class);
    }

    // Relation avec Products (Un store vend plusieurs produits)
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Relation avec Commandes (Un store a plusieurs commandes)
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    // Relation avec DeliveryFee (Un store a un tarif de livraison)
    public function deliveryFee()
    {
        return $this->belongsTo(DeliveryFee::class);
    }
}

