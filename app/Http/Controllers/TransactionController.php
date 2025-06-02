<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data checkout jika perlu
        $request->validate([
            'product' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Simpan transaksi ke user yang sedang login
        $transaction = new Transaction();
        $transaction->user_id = Auth::id(); // ⬅️ ID user yang sedang login
        $transaction->product = $request->product;
        $transaction->price = $request->price;
        $transaction->status = 'Pending'; // default status
        $transaction->save();

        return redirect()->route('checkout.success')->with('success', 'Transaction saved!');
    }
}
