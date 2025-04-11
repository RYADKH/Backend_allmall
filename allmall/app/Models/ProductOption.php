<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id', // Clé étrangère vers products
    ];

    // Relation avec Product (Une option appartient à un produit)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relation avec OptionValues (Une option peut avoir plusieurs valeurs)
    public function optionValues()
    {
        return $this->hasMany(OptionValue::class);
    }
}

