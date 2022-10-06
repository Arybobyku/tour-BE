<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspectPivot extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tourist_attraction',
        'id_aspect',
    ];
}
