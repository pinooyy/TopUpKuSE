<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            ['name' => 'QRIS', 'fee' => 1000.00],
            ['name' => 'Transfer Bank', 'fee' => 2000.00],
            ['name' => 'OVO', 'fee' => 1500.00],
            ['name' => 'DANA', 'fee' => 1500.00],
        ];

        foreach ($paymentMethods as $method) {
            DB::table('payment_methods')->updateOrInsert(
                ['name' => $method['name']],
                ['fee' => $method['fee'], 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
