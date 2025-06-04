<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ActivityHistory;

class Checkout extends Controller
{
    public function show(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'data' => 'required|string',
            'whatsapp_number' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Ambil data produk berdasarkan ID
        $product = Product::findOrFail($validated['product_id']);

        // Ambil fee berdasarkan metode pembayaran
        $feeRecord = DB::table('payment_methods')->where('name', $validated['payment_method'])->first();
        $fee = $feeRecord ? $feeRecord->fee : 0;

        // Hitung total
        $totalPayment = $product->price + $fee;

        // Buat nomor invoice
        $invoice_number = 'INV' . mt_rand(1000000, 9999999);

        // Simpan transaksi ke database
        Transaction::create([
            'user_id' => Auth::id(),
            'product' => $product->quantity . ' ' . $product->currency,
            'price' => $product->price,
            'fee' => $fee,
            'total_payment' => $totalPayment,
            'status' => 'pending',
            'invoice_number' => $invoice_number,
            'order_date' => now(),
        ]);

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
