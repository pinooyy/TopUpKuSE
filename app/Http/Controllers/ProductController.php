<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function home(Request $request)
    {
        // Fetch all distinct game banners without filtering
        $products = Product::select('game_name', DB::raw('MIN(image_url) as image_url'))
            ->groupBy('game_name')
            ->get();

        return view('home', compact('products'));
    }

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

/* ini untuk merefer currency atau produk ingame yang bisa dibeli sesuai dengan spesifikasi masing" misal (genshin jual genesis, hsr jual oneric, dll). 
dimana di refer sesuai game_name supaya bisa diambil dari database sesuai dengan game_name yang ada di dalam database
*/
