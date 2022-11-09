<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['title', 'parent_id', 'slug']; // Ici on défini les champs que l'on veut pouvoir remplir

    /**
     * Get the index name for the model.
     *
     * @return string
     */

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id'); // belongsTo = 1:N
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id'); // hasMany = N:1
    }

    public function products()
    {
        return $this->hasMany(Product::class); // hasMany = N:1
    }

    public function getParentsNames()
    {

        $parents = collect([]);

        if ($this->parent) {
            $parent = $this->parent;
            while (!is_null($parent)) {
                $parents->push($parent);
                $parent = $parent->parent;
            }
            return $parents;
        } else {
            return $this->name;
        }
    }
}
