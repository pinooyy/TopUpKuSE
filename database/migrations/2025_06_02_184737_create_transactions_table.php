<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('invoice_number')->unique();
        $table->string('game');
        $table->string('game_id');
        $table->string('whatsapp_number');
        $table->string('payment_method');
        $table->decimal('amount', 15, 2);
        $table->decimal('fee', 15, 2)->default(0);
        $table->enum('status', ['Pending', 'Success', 'Failed'])->default('Pending');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
