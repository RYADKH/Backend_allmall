<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Admin extends Model
{

    protected $fillable = [
        'user_id', // Clé étrangère vers users
    ];

    // Relation avec User (Un admin appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
