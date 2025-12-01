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
        Schema::create('influencer_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('influencer_id')->nullable();
            $table->foreign('influencer_id')->references('id')->on('influencers');

            $table->text('page_link')->nullable();
            $table->string('category')->nullable();
            $table->string('city')->nullable();
            $table->string('followers')->nullable();
            $table->string('ER')->comment('نرخ تعامل')->nullable();
            $table->string('average_like')->nullable();
            $table->string('average_comment')->nullable();
            $table->enum('status',[0,1,2])->nullable()->comment('0=>in list , 1=>pending , 2=>published');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_infos');
    }
};
