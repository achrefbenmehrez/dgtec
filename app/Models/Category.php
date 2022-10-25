<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['title', 'parent_id']; // Ici on défini les champs que l'on veut pouvoir remplir

    /**
     * Get the index name for the model.
     *
     * @return string
     */

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id'); // belongsTo = 1:N
    }
    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id'); // hasMany = N:1
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('categories'); // hasMany = N:1
    }

    public function products()
    {
        return $this->hasMany(Product::class); // hasMany = N:1
    }
}
