<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RatingSeeder extends Seeder
{
    public function run(): void
    {
        $dummyData = [
            'genshin' => [
                'average_rating' => 4.8,
                'total_reviews' => 54600,
                'total_sales' => 81000,
                'rating_distribution' => json_encode([
                    5 => 54600,
                    4 => 2,
                    3 => 0,
                    2 => 0,
                    1 => 0,
                ]),
                'user_reviews' => [
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
            ],
            'hsr' => [
                'average_rating' => 4.5,
                'total_reviews' => 32000,
                'total_sales' => 45000,
                'rating_distribution' => json_encode([
                    5 => 28000,
                    4 => 3000,
                    3 => 500,
                    2 => 300,
                    1 => 200,
                ]),
                'user_reviews' => [
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
            ],
            'wuwa' => [
                'average_rating' => 4.7,
                'total_reviews' => 30850,
                'total_sales' => 53000,
                'rating_distribution' => json_encode([
                    5 => 28000,
                    4 => 2200,
                    3 => 400,
                    2 => 150,
                    1 => 100,
                ]),
                'user_reviews' => [
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
            ],
            'superstar' => [
                'average_rating' => 4.9,
                'total_reviews' => 41500,
                'total_sales' => 52000,
                'rating_distribution' => json_encode([
                    5 => 41000,
                    4 => 350,
                    3 => 100,
                    2 => 50,
                    1 => 0,
                ]),
                'user_reviews' => [
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
            ],
        ];

        foreach ($dummyData as $gameName => $data) {
            $ratingId = DB::table('ratings')->insertGetId([
                'game_name' => $gameName,
                'average_rating' => $data['average_rating'],
                'total_reviews' => $data['total_reviews'],
                'total_sales' => $data['total_sales'],
                'rating_distribution' => $data['rating_distribution'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            foreach ($data['user_reviews'] as $review) {
                DB::table('user_reviews')->insert([
                    'rating_id' => $ratingId,
                    'email' => $review['email'],
                    'rating' => $review['rating'],
                    'comment' => $review['comment'],
                    'tag' => $review['tag'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
