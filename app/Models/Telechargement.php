<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telechargement extends Model
{
    protected $fillable = [
        'attachementsUrl'
    ];

    use HasFactory;
}
