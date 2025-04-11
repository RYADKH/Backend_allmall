<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relation avec SubCategories (Une catégorie peut avoir plusieurs sous-catégories)
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    // Relation indirecte avec Products via SubCategory
    public function products()
    {
        return $this->hasManyThrough(Product::class, SubCategory::class);
    }
}
