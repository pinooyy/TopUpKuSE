<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 1467568, 'quantity' => 8080,
                'image_url' => 'Assets SoftEng/genshin_banner.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 734234, 'quantity' => 3880,
                'image_url' => 'Assets SoftEng/genshin_banner.jpeg', 'created_at' => Carbon::now(),'updated_at' => Carbon::now(),
            ],
            [
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 440541, 'quantity' => 2240,
                'image_url' => 'Assets SoftEng/genshin_banner.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 229730, 'quantity' => 1090,
                'image_url' => 'Assets SoftEng/genshin_banner.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 72973, 'quantity' => 330,
                'image_url' => 'Assets SoftEng/genshin_banner.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 14865, 'quantity' => 60,
                'image_url' => 'Assets SoftEng/genshin_banner.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
