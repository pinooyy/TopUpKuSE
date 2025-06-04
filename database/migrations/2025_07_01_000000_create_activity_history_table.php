<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activity_history', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_image');
            $table->string('quantity');
            $table->string('data'); // UID
            $table->string('whatsapp_number');
            $table->string('payment_method');
            $table->decimal('service_price', 15, 2);
            $table->decimal('fee', 15, 2);
            $table->decimal('total_payment', 15, 2);
            $table->string('status');
            $table->string('order_date');
            $table->string('invoice_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_history');
    }
};
