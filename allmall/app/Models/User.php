<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // admin, customer, store_owner, advertiser
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    // Relation avec Customer (un utilisateur peut être un client)
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    // Relation avec StoreOwner (un utilisateur peut être un propriétaire de magasin)
    public function storeOwner()
    {
        return $this->hasOne(StoreOwner::class);
    }

    // Relation avec Advertiser (un utilisateur peut être un annonceur)
    public function advertiser()
    {
        return $this->hasOne(Advertiser::class);
    }

    // Relation avec Admin (si l'utilisateur est un admin)
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    // Vérifie si l'utilisateur est un admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Vérifie si l'utilisateur est un customer
    public function isCustomer()
    {
        return $this->role === 'customer';
    }

    // Vérifie si l'utilisateur est un store owner
    public function isStoreOwner()
    {
        return $this->role === 'store_owner';
    }

    // Vérifie si l'utilisateur est un advertiser
    public function isAdvertiser()
    {
        return $this->role === 'advertiser';
    }
}
