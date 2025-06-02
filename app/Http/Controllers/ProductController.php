<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Models\Nominal;

class ProductController extends Controller
{
    public function home(Request $request)
    {
        //untuk display di home
        $products = Product::select('game_name', 'game_title', 'image_url')
        ->groupBy('game_name', 'game_title', 'image_url')
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

    // Rating data
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
            'userReviews' => array_map(fn($review) => (array) $review, $userReviews),
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

    // ✅ Tambahkan ini
    $nominals = DB::table('nominals')->where('game_name', $key)->get();
    $paymentMethods = DB::table('payment_methods')->get();

    $viewName = 'product.' . $key;

    return view($viewName, array_merge(
        compact('products', 'nominals', 'paymentMethods'),
        $ratingData
    ));
}



    public function detail($game_name)
{
    $product = Product::where('game_name', $game_name)->firstOrFail();

    // Ambil data nominal berdasarkan game_name
   $nominals = DB::table('nominals')->where('game_name', $game_name)->get();
    return view('product.product_detail', compact('product', 'nominals'));

}
}

/* ini untuk merefer currency atau produk ingame yang bisa dibeli sesuai dengan spesifikasi masing" misal (genshin jual genesis, hsr jual oneric, dll). 
dimana di refer sesuai game_name supaya bisa diambil dari database sesuai dengan game_name yang ada di dalam database
*/
