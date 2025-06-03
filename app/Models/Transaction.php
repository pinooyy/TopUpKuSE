<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'product',
    'price',
    'fee',
    'total_payment',
    'status',
    'invoice_number',
    'order_date',
    'data',               // Tambahan
    'whatsapp_number',    // Tambahan
    'product_image',      // Tambahan
];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

