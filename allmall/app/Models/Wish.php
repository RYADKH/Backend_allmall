<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wish extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_added',
        'customer_id', // Clé étrangère vers customers
    ];

    // Relation avec Customer (Une liste de souhaits appartient à un client)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relation avec Products (Une liste de souhaits peut contenir plusieurs produits)
    public function products()
    {
        return $this->belongsToMany(Product::class, 'wish_products')->withTimestamps();
    }
}
