<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'telechargement_id'
    ];

    public function telechargement()
    {
        return $this->belongsTo(Telechargement::class);
    }
}
