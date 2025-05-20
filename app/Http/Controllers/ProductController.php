<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
        // Fetch all products by game_name
        $products = Product::where('game_name', $game_name)
            ->select('currency', 'quantity', DB::raw('MIN(price) as price'))
            ->groupBy('currency', 'quantity')
            ->get();

        // Return the existing blade view for the game with products data
        $viewName = 'product.' . strtolower($game_name);

        return view($viewName, compact('products'));
    }
}