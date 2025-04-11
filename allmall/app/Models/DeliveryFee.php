<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'wilaya',
        'price',
    ];

    // Relation avec Store (Un tarif de livraison peut être appliqué à plusieurs magasins)
    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}

