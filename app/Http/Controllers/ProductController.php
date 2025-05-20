<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display the specified product details by game name.
     *
     * @param  string  $game_name
     * @return \Illuminate\View\View
     */
    public function show($game_name)
    {
        // Fetch product by game_name
        $product = Product::where('game_name', $game_name)->firstOrFail();

        // Pass product data to the product detail view
        return view('product.product_detail', compact('product'));
    }
}
