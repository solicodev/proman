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
        Schema::create('influencer_stories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('influencer_id')->nullable();
            $table->foreign('influencer_id')->references('id')->on('influencers');

            $table->text('story_link')->nullable();
            $table->string('views')->nullable();
            $table->string('reach')->nullable();
            $table->string('interaction')->nullable();
            $table->string('profile_activity')->nullable();
            $table->string('like_count')->nullable();
            $table->string('share_count')->nullable();
            $table->string('save_count')->nullable();
            $table->string('comment_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_stories');
    }
};
