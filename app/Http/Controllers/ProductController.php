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

        // Dummy average rating for demonstration
        $averageRating = 4.8;

        // Dummy rating data for different products
        $dummyData = [
            'genshin' => [
                'averageRating' => 4.8,
                'totalReviews' => 54600,
                'totalSales' => 81000,
                'ratingDistribution' => [
                    5 => 54600,
                    4 => 2,
                    3 => 0,
                    2 => 0,
                    1 => 0,
                ],
                'userReviews' => [
                    [
                        'email' => 'ta**********1@gmail.com',
                        'rating' => 5,
                        'comment' => 'Gampang banget, Engga ribet!',
                        'tag' => 'Top up Genshin Impact',
                    ],
                    [
                        'email' => 'he**********y@gmail.com',
                        'rating' => 5,
                        'comment' => '50 Genesis Crystals (50 + 0 Bonus)',
                        'tag' => '',
                    ],
                ],
                'productImage' => '../Assets SoftEng/genshin_product.png',
                'productName' => 'Genshin Impact',
            ],
            'hsr' => [
                'averageRating' => 4.5,
                'totalReviews' => 32000,
                'totalSales' => 45000,
                'ratingDistribution' => [
                    5 => 28000,
                    4 => 3000,
                    3 => 500,
                    2 => 300,
                    1 => 200,
                ],
                'userReviews' => [
                    [
                        'email' => 'user1@example.com',
                        'rating' => 5,
                        'comment' => 'Great service!',
                        'tag' => 'Top up Honkai Star Rail',
                    ],
                    [
                        'email' => 'user2@example.com',
                        'rating' => 4,
                        'comment' => 'Fast and reliable.',
                        'tag' => '',
                    ],
                ],
                'productImage' => '../Assets SoftEng/hsr_product.png',
                'productName' => 'Wuthering Waves',
            ],
            'wuwa' => [
                'averageRating' => 4.7,
                'totalReviews' => 30850,
                'totalSales' => 53000,
                'ratingDistribution' => [
                    5 => 28000,
                    4 => 2200,
                    3 => 400,
                    2 => 150,
                    1 => 100,
                ],
                'userReviews' => [
                    [
                        'email' => 'user1@example.com',
                        'rating' => 5,
                        'comment' => 'Great service!',
                        'tag' => 'Top up Wuthering Waves',
                    ],
                    [
                        'email' => 'user2@example.com',
                        'rating' => 4,
                        'comment' => 'Fast and reliable.',
                        'tag' => 'Top up Wuthering Waves',
                    ],
                ],
                'productImage' => '../Assets SoftEng/wuwa_product.png',
                'productName' => 'Wuthering Waves',
            ],
            'superstar' => [
                'averageRating' => 4.9,
                'totalReviews' => 41500,
                'totalSales' => 52000,
                'ratingDistribution' => [
                    5 => 41000,
                    4 => 350,
                    3 => 100,
                    2 => 50,
                    1 => 0,
                ],
                'userReviews' => [
                    [
                        'email' => 'user1@example.com',
                        'rating' => 5,
                        'comment' => 'Great service!',
                        'tag' => '',
                    ],
                    [
                        'email' => 'user2@example.com',
                        'rating' => 4,
                        'comment' => 'Fast and reliable.',
                        'tag' => 'Top up SuperStar G-Friend',
                    ],
                ],
                'productImage' => '../Assets SoftEng/superstargfriend_product.jpeg',
                'productName' => 'SuperStar G-Friend',
            ],
            // Add more products as needed
        ];

        $key = strtolower($game_name);
        $ratingData = $dummyData[$key] ?? [
            'averageRating' => 0,
            'totalReviews' => 0,
            'totalSales' => 0,
            'ratingDistribution' => [5 => 0,4 => 0,3 => 0,2 => 0,1 => 0],
            'userReviews' => [],
            'productImage' => '../Assets SoftEng/default_product.png',
            'productName' => ucfirst($game_name),
        ];

        $viewName = 'product.' . $key;
        return view($viewName, array_merge(
            compact('products'),
            $ratingData
        ));
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
