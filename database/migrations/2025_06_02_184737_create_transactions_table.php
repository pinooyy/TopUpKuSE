<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
public function up()
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('product');
        $table->integer('price');
        $table->integer('fee');
        $table->integer('total_payment');
        $table->string('status');
        $table->string('invoice_number')->unique();
        $table->string('order_date');
        
        // Tambahan kolom:
        $table->string('data');
        $table->string('whatsapp_number');
        $table->string('product_image');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
