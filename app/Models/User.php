<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
        'societe_id',
        'login',
        'adresse_facturation_id',
        'active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adressesLivraison()
    {
        return $this->hasMany(AdresseLivraison::class);
    }

    public function adresseFacturation()
    {
        return $this->belongsTo(AdresseFacturation::class);
    }

    public function societe()
    {
        return $this->belongsTo(Societe::class);
    }

    public function panier()
    {
        return $this->belongsTo(Panier::class);
    }

    public function savedCarts()
    {
        return $this->hasMany(SavedCart::class);
    }

    public function devis()
    {
        return $this->hasMany(Devis::class);
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
}
