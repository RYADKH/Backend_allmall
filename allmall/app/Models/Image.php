<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'product_id', // Clé étrangère vers products
    ];

    // Relation avec Product (Une image appartient à un produit)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

