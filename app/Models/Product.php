<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'game_name',
        'currency',
        'price',
        'description',
        'image_url',
    ];
}
