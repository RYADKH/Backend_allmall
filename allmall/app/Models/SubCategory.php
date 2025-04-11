<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id', // Clé étrangère vers categories
    ];

    // Relation avec Category (Une sous-catégorie appartient à une catégorie)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relation avec Products (Une sous-catégorie peut contenir plusieurs produits)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

