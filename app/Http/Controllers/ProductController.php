<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($game_name)
    {
        // Fetch product by game_name
        $product = Product::where('game_name', $game_name)->firstOrFail();

        // Pass product data to the product detail view
        return view('product.product_detail', compact('product'));
    }
}

/* ini untuk merefer currency atau produk ingame yang bisa dibeli sesuai dengan spesifikasi masing" misal (genshin jual genesis, hsr jual oneric, dll). 
dimana di refer sesuai game_name supaya bisa diambil dari database sesuai dengan game_name yang ada di dalam database
*/
