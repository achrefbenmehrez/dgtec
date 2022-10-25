<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = ['title']; // Ici on défini les champs que l'on veut pouvoir remplir

    public function products()
    {
        return $this->hasMany(Product::class); // hasMany = N:1
    }
}
