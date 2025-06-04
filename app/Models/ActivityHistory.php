<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityHistory extends Model
{
    use HasFactory;

    protected $table = 'activity_history';

    protected $fillable = [
        'product_name',
        'product_image',
        'quantity',
        'data',
        'whatsapp_number',
        'payment_method',
        'service_price',
        'fee',
        'total_payment',
        'status',
        'order_date',
        'invoice_number',
    ];
}
