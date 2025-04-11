<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id', // Clé étrangère vers users
        'full_name', // Nom complet du client
        'phone_number', // Numéro de téléphone du client
    ];

    // Relation avec User (Un customer appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec les commandes du client
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    // Relation avec les adresses de livraison
    public function deliveryAddresses()
    {
        return $this->hasMany(DeliveryAddress::class);
    }

    // Relation avec la liste de souhaits
    public function wishes()
    {
        return $this->hasMany(Wish::class);
    }
}

