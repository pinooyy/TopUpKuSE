<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([

            //genshin
            [
                'game_title' => 'Genshin Impact',
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 1467568, 'quantity' => 8080,
                'image_url' => 'Assets SoftEng/genshin_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Genshin Impact',
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 734234, 'quantity' => 3880,
                'image_url' => 'Assets SoftEng/genshin_product.png', 'created_at' => Carbon::now(),'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Genshin Impact',
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 440541, 'quantity' => 2240,
                'image_url' => 'Assets SoftEng/genshin_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Genshin Impact',
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 229730, 'quantity' => 1090,
                'image_url' => 'Assets SoftEng/genshin_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Genshin Impact',
                'game_title' => 'Genshin Impact',
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 72973, 'quantity' => 330,
                'image_url' => 'Assets SoftEng/genshin_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Genshin Impact',
                'game_name' => 'genshin', 'currency' => 'Genesis Crystal', 'price' => 14865, 'quantity' => 60,
                'image_url' => 'Assets SoftEng/genshin_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            //hsr
            [
                'game_title' => 'Honkai Star Rail',
                'game_name' => 'hsr', 'currency' => 'Oneric Shard', 'price' => 1440541, 'quantity' => 8080,
                'image_url' => 'Assets SoftEng/hsr_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Honkai Star Rail',
                'game_name' => 'hsr', 'currency' => 'Oneric Shard', 'price' => 719820, 'quantity' => 3880,
                'image_url' => 'Assets SoftEng/hsr_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Honkai Star Rail',
                'game_name' => 'hsr', 'currency' => 'Oneric Shard', 'price' => 431532, 'quantity' => 2240,
                'image_url' => 'Assets SoftEng/hsr_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Honkai Star Rail',
                'game_name' => 'hsr', 'currency' => 'Oneric Shard', 'price' => 224324, 'quantity' => 1090,
                'image_url' => 'Assets SoftEng/hsr_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Honkai Star Rail',
                'game_name' => 'hsr', 'currency' => 'Oneric Shard', 'price' => 71171, 'quantity' => 330,
                'image_url' => 'Assets SoftEng/hsr_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Honkai Star Rail',
                'game_name' => 'hsr', 'currency' => 'Oneric Shard', 'price' => 14414, 'quantity' => 60,
                'image_url' => 'Assets SoftEng/hsr_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            //wuwa
            [
                'game_title' => 'Wuthering Waves',
                'game_name' => 'wuwa', 'currency' => 'Lunite', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/wuwa_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Wuthering Waves',
                'game_name' => 'wuwa', 'currency' => 'Lunite', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/wuwa_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Wuthering Waves',
                'game_name' => 'wuwa', 'currency' => 'Lunite', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/wuwa_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Wuthering Waves',
                'game_name' => 'wuwa', 'currency' => 'Lunite', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/wuwa_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Wuthering Waves',
                'game_name' => 'wuwa', 'currency' => 'Lunite', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/wuwa_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            //superstar
            [
                'game_title' => 'SuperStar GFriend',
                'game_name' => 'superstar', 'currency' => 'Gems', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => '../Assets SoftEng/superstargfriend_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'SuperStar GFriend',
                'game_name' => 'superstar', 'currency' => 'Gems', 'price' => 768463, 'quantity' => 3280,
                'image_url' => '../Assets SoftEng/superstargfriend_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'SuperStar GFriend',
                'game_name' => 'superstar', 'currency' => 'Gems', 'price' => 461054, 'quantity' => 1980,
                'image_url' => '../Assets SoftEng/superstargfriend_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'SuperStar GFriend',
                'game_name' => 'superstar', 'currency' => 'Gems', 'price' => 230527, 'quantity' => 980,
                'image_url' => '../Assets SoftEng/superstargfriend_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'SuperStar GFriend',
                'game_name' => 'superstar', 'currency' => 'Gems', 'price' => 76843, 'quantity' => 300,
                'image_url' => '../Assets SoftEng/superstargfriend_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            //playtogether
            [
                'game_title' => 'Play Together',
                'game_name' => 'playtogether', 'currency' => 'Gold', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/playtogether_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Play Together',
                'game_name' => 'playtogether', 'currency' => 'Gold', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/playtogether_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Play Together',
                'game_name' => 'playtogether', 'currency' => 'Gold', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/playtogether_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Play Together',
                'game_name' => 'playtogether', 'currency' => 'Gold', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/playtogether_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Play Together',
                'game_name' => 'playtogether', 'currency' => 'Gold', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/playtogether_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // mole 
            [
                'game_title' => 'Mobile Legends: Bang Bang',
                'game_name' => 'mole', 'currency' => 'Diamonds', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/mole_product.webp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Mobile Legends: Bang Bang',
                'game_name' => 'mole', 'currency' => 'Diamonds', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/mole_product.webp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Mobile Legends: Bang Bang',
                'game_name' => 'mole', 'currency' => 'Diamonds', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/mole_product.webp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Mobile Legends: Bang Bang',
                'game_name' => 'mole', 'currency' => 'Diamonds', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/mole_product.webp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Mobile Legends: Bang Bang',
                'game_name' => 'mole', 'currency' => 'Diamonds', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/mole_product.webp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // pubg 
            [
                'game_title' => 'PUBG Mobile',
                'game_name' => 'pubg', 'currency' => 'UC', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/pubgm_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'PUBG Mobile',
                'game_name' => 'pubg', 'currency' => 'UC', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/pubgm_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'PUBG Mobile',
                'game_name' => 'pubg', 'currency' => 'UC', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/pubgm_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'PUBG Mobile',
                'game_name' => 'pubg', 'currency' => 'UC', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/pubgm_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'PUBG Mobile',
                'game_name' => 'pubg', 'currency' => 'UC', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/pubgm_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // steam 
            [
                'game_title' => 'Steam',
                'game_name' => 'steam', 'currency' => 'Dollar', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/steam_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Steam',
                'game_name' => 'steam', 'currency' => 'Dollar', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/steam_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Steam',
                'game_name' => 'steam', 'currency' => 'Dollar', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/steam_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Steam',
                'game_name' => 'steam', 'currency' => 'Dollar', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/steam_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Steam',
                'game_name' => 'steam', 'currency' => 'Dollar', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/steam_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // valo 
            [
                'game_title' => 'Valorant',
                'game_name' => 'valo', 'currency' => 'VP', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/valorant_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Valorant',
                'game_name' => 'valo', 'currency' => 'VP', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/valorant_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Valorant',
                'game_name' => 'valo', 'currency' => 'VP', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/valorant_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Valorant',
                'game_name' => 'valo', 'currency' => 'VP', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/valorant_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Valorant',
                'game_name' => 'valo', 'currency' => 'VP', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/valorant_product.png', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // roblox 
            [
                'game_title' => 'Roblox',
                'game_name' => 'roblox', 'currency' => 'Robux', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/roblox_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Roblox',
                'game_name' => 'roblox', 'currency' => 'Robux', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/roblox_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Roblox',
                'game_name' => 'roblox', 'currency' => 'Robux', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/roblox_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Roblox',
                'game_name' => 'roblox', 'currency' => 'Robux', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/roblox_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Roblox',
                'game_name' => 'roblox', 'currency' => 'Robux', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/roblox_product.jpeg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // cookierunkingdom 
            [
                'game_title' => 'CookieRun Kingdom',
                'game_name' => 'cookierunkingdom', 'currency' => 'Gems', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/cookierunkingdom_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'CookieRun Kingdom',
                'game_name' => 'cookierunkingdom', 'currency' => 'Gems', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/cookierunkingdom_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'CookieRun Kingdom',
                'game_name' => 'cookierunkingdom', 'currency' => 'Gems', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/cookierunkingdom_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'CookieRun Kingdom',
                'game_name' => 'cookierunkingdom', 'currency' => 'Gems', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/cookierunkingdom_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'CookieRun Kingdom',
                'game_name' => 'cookierunkingdom', 'currency' => 'Gems', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/cookierunkingdom_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],

            // ff 
            [
                'game_title' => 'Free Fire',
                'game_name' => 'epep', 'currency' => 'Diamonds', 'price' => 1467684, 'quantity' => 6480,
                'image_url' => 'Assets SoftEng/epep_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Free Fire',
                'game_name' => 'epep', 'currency' => 'Diamonds', 'price' => 768463, 'quantity' => 3280,
                'image_url' => 'Assets SoftEng/epep_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Free Fire',
                'game_name' => 'epep', 'currency' => 'Diamonds', 'price' => 461054, 'quantity' => 1980,
                'image_url' => 'Assets SoftEng/epep_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Free Fire',
                'game_name' => 'epep', 'currency' => 'Diamonds', 'price' => 230527, 'quantity' => 980,
                'image_url' => 'Assets SoftEng/epep_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
            [
                'game_title' => 'Free Fire',
                'game_name' => 'epep', 'currency' => 'Diamonds', 'price' => 76843, 'quantity' => 300,
                'image_url' => 'Assets SoftEng/epep_product.jpg', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
