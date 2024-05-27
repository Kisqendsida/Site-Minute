<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partener extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'phone',
        'depart',
        'arrivee',
        'vehicule',
        'etat',
        'capacity',

    ];
}
