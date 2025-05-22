<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

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

        $key = strtolower($game_name);

        $ratingRecord = DB::table('ratings')->where('game_name', $key)->first();

        if ($ratingRecord) {
            $userReviews = DB::table('user_reviews')->where('rating_id', $ratingRecord->id)->get()->toArray();

            $ratingDistribution = json_decode($ratingRecord->rating_distribution, true);
            $maxRatingCount = max($ratingDistribution);

            $ratingData = [
                'averageRating' => $ratingRecord->average_rating,
                'totalReviews' => $ratingRecord->total_reviews,
                'totalSales' => $ratingRecord->total_sales,
                'ratingDistribution' => $ratingDistribution,
                'maxRatingCount' => $maxRatingCount,
                'userReviews' => array_map(function ($review) {
                    return (array) $review;
                }, $userReviews),
                'productImage' => 'Assets SoftEng/' . $key . '_product.png',
                'productName' => ucfirst($game_name),
            ];
        } else {
            $ratingDistribution = [5 => 0, 4 => 0, 3 => 0, 2 => 0, 1 => 0];
            $maxRatingCount = max($ratingDistribution);

            $ratingData = [
                'averageRating' => 0,
                'totalReviews' => 0,
                'totalSales' => 0,
                'ratingDistribution' => $ratingDistribution,
                'maxRatingCount' => $maxRatingCount,
                'userReviews' => [],
                'productImage' => '../Assets SoftEng/default_product.png',
                'productName' => ucfirst($game_name),
            ];
        }

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
