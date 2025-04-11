<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'old_price',
        'reduction',
        'availability',
        'quantity',
        'description',
        'sub_category_id', // Clé étrangère vers sub_categories
        'store_id', // Clé étrangère vers stores
    ];

    // Relation avec Store (Un produit appartient à un magasin)
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // Relation avec SubCategory (Un produit appartient à une sous-catégorie)
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    // Relation avec les images du produit
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    // Relation avec les variantes du produit
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    // Relation avec les avis des clients
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

