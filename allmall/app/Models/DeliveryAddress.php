<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'state',
        'city',
        'street',
        'zip_code',
        'customer_id', // Clé étrangère vers customers
    ];

    // Relation avec Customer (Une adresse appartient à un client)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

