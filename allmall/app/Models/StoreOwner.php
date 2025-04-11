<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreOwner extends Model
{
    protected $fillable = [
        'user_id', // Clé étrangère vers users
        'store_id', // Clé étrangère vers stores
    ];

    // Relation avec User (Un store_owner appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec Store (Un store_owner possède un magasin)
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
