<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Product;


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

        // Kirim data ke halaman checkout
        return view('checkout', [
            'product_name' => $product->quantity . ' ' . $product->currency,
            'product_image' => $product->image_url,
            'quantity' => $product->quantity,
            'data' => $validated['data'],
            'whatsapp_number' => $validated['whatsapp_number'],
            'payment_method' => $validated['payment_method'],
            'service_price' => $product->price,
            'fee' => $fee,
            'total_payment' => $totalPayment,
            'status' => 'pending',
            'order_date' => now(),
            'invoice_number' => $invoice_number,
        ]);
    }
}
