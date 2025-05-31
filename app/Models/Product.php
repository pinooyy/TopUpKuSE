<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_title',
        'game_name',
        'currency',
        'price',
        'quantity',
        'image_url',
    ];
}
