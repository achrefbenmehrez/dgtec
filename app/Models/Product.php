<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['title', 'description', 'price', 'category_id', 'brand_id', "stock", "garantie", "images", "ref_fabricant", "EAN"]; // Ici on défini les champs que l'on veut pouvoir remplir

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id'); // belongsToMany = N:N
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class); // belongsTo = 1:N
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
}
