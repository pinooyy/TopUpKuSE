<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($game_name)
    {
        $products = Product::where('game_name', $game_name)
            ->select('currency', 'quantity', DB::raw('MIN(price) as price'))
            ->groupBy('currency', 'quantity')
            ->get();

        $viewName = 'product.' . strtolower($game_name);
        return view($viewName, compact('products'));
    }

    public function detail($game_name)
    {
        $product = Product::where('game_name', $game_name)->firstOrFail();
        return view('product.product_detail', compact('product'));
    }
}
