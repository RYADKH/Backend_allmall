<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'variant_name',
        'price',
        'product_id', // Clé étrangère vers products
    ];

    // Relation avec Product (Une variante appartient à un produit)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relation avec OptionValues (Une variante peut avoir plusieurs valeurs d'options)
    public function optionValues()
    {
        return $this->belongsToMany(OptionValue::class, 'product_variant_option')->withTimestamps();
    }
}

