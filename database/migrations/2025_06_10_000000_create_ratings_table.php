<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('game_name');
            $table->float('average_rating')->default(0);
            $table->integer('total_reviews')->default(0);
            $table->integer('total_sales')->default(0);
            $table->json('rating_distribution')->nullable();
            $table->timestamps();
        });

        Schema::create('user_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rating_id')->constrained('ratings')->onDelete('cascade');
            $table->string('email');
            $table->tinyInteger('rating');
            $table->text('comment');
            $table->string('tag')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_reviews');
        Schema::dropIfExists('ratings');
    }
}
