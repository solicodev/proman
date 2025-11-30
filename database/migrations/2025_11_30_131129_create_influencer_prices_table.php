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
        Schema::create('influencer_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('influencer_id')->nullable();
            $table->foreign('influencer_id')->references('id')->on('influencers');

            $table->string('post_price')->nullable();
            $table->string('story_price')->nullable();
            $table->string('post_type')->nullable();
            $table->string('story_type')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_prices');
    }
};
