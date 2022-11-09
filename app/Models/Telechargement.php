<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telechargement extends Model
{
    protected $casts = [
        'attachementsUrl' => 'array'
    ];

    protected $fillable = [
        'attachementsUrl'
    ];

    use HasFactory;

    public function catalogues()
    {
        return $this->belongsToMany(Catalogue::class, 'catalogue_telechargements');
    }
}
