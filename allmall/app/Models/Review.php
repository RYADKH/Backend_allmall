<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate',
        'likes',
        'dislikes',
        'date',
        'text',
        'customer_id', // Clé étrangère vers customers
        'product_id', // Clé étrangère vers products
    ];

    // Relation avec Customer (Un avis appartient à un client)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relation avec Product (Un avis appartient à un produit)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

