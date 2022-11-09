<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'photosUrl' => 'array'
    ];

    protected $fillable = ['name', 'description', 'price', "quantiteStock", "ansGarantie", "photosUrl", "ref_fabricant", "EAN", 'slug', 'dateFinPromo', 'fiche_technique_id', 'telechargement_id', 'category_id', 'brand_id', 'annee_production', 'famille_id']; // Ici on défini les champs que l'on veut pouvoir remplir

    public function category()
    {
        return $this->belongsTo(Category::class); // belongsTo = 1:N
    }

    public function ficheTechnique()
    {
        return $this->belongsTo(FicheTechnique::class); // belongsTo = 1:N
    }

    public function telechargement()
    {
        return $this->belongsTo(Telechargement::class); // belongsTo = 1:N
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class); // belongsTo = 1:N
    }

    public function famille()
    {
        return $this->belongsTo(Famille::class); // belongsTo = 1:N
    }
}
