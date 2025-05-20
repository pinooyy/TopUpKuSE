<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Removed user creation to keep users table empty initially

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
