<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{




public function index() {


        $products = Product::select('game_name', 'game_title', 'image_url')
        ->groupBy('game_name', 'game_title', 'image_url')
        ->get();




        return view('home', compact('products'));
}


}
