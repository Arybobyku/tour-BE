<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristAttraction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kabupaten',
        'name',
        'description',
        'image',
        'location',
        'latitude',
        'longitude',
    ];
}
