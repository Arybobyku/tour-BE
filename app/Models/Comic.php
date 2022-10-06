<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tourist_attraction',
        'name',
        'description',
        'image',
        'pdf',
    ];
}
