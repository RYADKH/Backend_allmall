<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    protected $fillable = [
        'user_id', // Clé étrangère vers users
        'company_name', // Nom de l'entreprise de l'annonceur
    ];

    // Relation avec User (Un advertiser appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
