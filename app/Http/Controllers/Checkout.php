<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Checkout extends Controller
{
    public function show(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'product_name' => 'required|string',
            'product_image' => 'required|string',
            'quantity' => 'required|string',
            'data' => 'required|string',
            'whatsapp_number' => 'required|string',
            'payment_method' => 'required|string',
            'service_price' => 'required|numeric',
            'fee' => 'required|numeric',
            'discount' => 'required|numeric',
            'total_payment' => 'required|numeric',
            'status' => 'required|string',
            'order_date' => 'required|string',
        ]);

        // Generate invoice number with format INVxxxxxxx (7-digit random number)
        $invoice_number = 'INV' . mt_rand(1000000, 9999999);

        // Add invoice number to validated data
        $validated['invoice_number'] = $invoice_number;

        // Pass validated data to the checkout view
        return view('checkout', $validated);
    }
}
