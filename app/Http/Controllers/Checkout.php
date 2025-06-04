<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ActivityHistory;

class Checkout extends Controller
{
    public function show(Request $request)
    {
        // Validate incoming request data except fee and total_payment
        $validated = $request->validate([
            'product_name' => 'required|string',
            'product_image' => 'required|string',
            'quantity' => 'required|string',
            'data' => 'required|string',
            'whatsapp_number' => 'required|string',
            'payment_method' => 'required|string',
            'service_price' => 'required|numeric',
            'status' => 'required|string',
            'order_date' => 'required|string',
        ]);

        // Fetch fee from payment_methods table based on payment_method
        $feeRecord = DB::table('payment_methods')->where('name', $validated['payment_method'])->first();
        $fee = $feeRecord ? $feeRecord->fee : 0;

        // Add fee to validated data
        $validated['fee'] = $fee;

        // Calculate total payment
        $validated['total_payment'] = $validated['service_price'] + $fee;

        // Generate invoice number with format INVxxxxxxx (7-digit random number)
        $invoice_number = 'INV' . mt_rand(1000000, 9999999);

        // Add invoice number to validated data
        $validated['invoice_number'] = $invoice_number;

        // Save data to ActivityHistory
        ActivityHistory::create($validated);

        // Pass validated data to the checkout view
        return view('checkout', $validated);
    }

    public function pay(Request $request)
    {
        $validated = $request->validate([
            'invoice_number' => 'required|string',
        ]);

        $activity = ActivityHistory::where('invoice_number', $validated['invoice_number'])->first();

        if ($activity) {
            $activity->status = 'paid';
            $activity->save();

            return redirect()->route('invoice.show', ['invoice_number' => $validated['invoice_number']]);
        } else {
            return redirect()->route('checkout.show')->withErrors(['invoice_number' => 'Invalid invoice number']);
        }
    }
}
