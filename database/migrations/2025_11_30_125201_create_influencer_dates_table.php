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
        Schema::create('influencer_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('influencer_id')->nullable();
            $table->foreign('influencer_id')->references('id')->on('influencers');

            $table->string('forecast_date_j')->nullable();
            $table->string('forecast_date_m')->nullable();

            $table->string('publication_date_j')->nullable();
            $table->string('publication_date_m')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_dates');
    }
};
