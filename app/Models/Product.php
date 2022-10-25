<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['title', 'description', 'price', 'category_id', 'brand_id', "stock", "garantie", "images", "ref_fabricant", "EAN"]; // Ici on défini les champs que l'on veut pouvoir remplir

    public function category()
    {
        return $this->belongsTo(Category::class); // belongsTo = 1:N
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class); // belongsTo = 1:N
    }
}
