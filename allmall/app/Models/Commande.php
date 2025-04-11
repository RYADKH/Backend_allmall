<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_method',
        'status',
        'date',
        'total_amount',
        'quantity',
        'customer_id', // Clé étrangère vers customers
        'store_id', // Clé étrangère vers stores
    ];

    // Relation avec Customer (Une commande appartient à un client)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relation avec Store (Une commande appartient à un magasin)
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // Relation avec les produits de la commande (Many-to-Many)
    public function products()
    {
        return $this->belongsToMany(Product::class, 'commande_products')->withPivot('quantity', 'price');
    }
}

