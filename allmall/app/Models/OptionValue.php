<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OptionValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'product_option_id', // Clé étrangère vers product_options
    ];

    // Relation avec ProductOption (Une valeur d'option appartient à une option)
    public function productOption()
    {
        return $this->belongsTo(ProductOption::class);
    }

    // Relation avec ProductVariants (Une valeur d'option peut être utilisée par plusieurs variantes)
    public function productVariants()
    {
        return $this->belongsToMany(ProductVariant::class, 'product_variant_option')->withTimestamps();
    }
}

