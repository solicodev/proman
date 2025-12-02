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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('start_date_j');
            $table->string('start_date_g');
            $table->string('forecast_end_time_j')->nullable();
            $table->string('forecast_end_time_g')->nullable();
            $table->string('real_end_date_j')->nullable();
            $table->string('real_end_date_g')->nullable();
            $table->string('budget');
            $table->enum('status',[0,1,2,3,4,5])->default('0')->comment('0=>hold , 1=>in progress , 2=>active , 3=>done , 4=>postponed , 5=>rejected');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('campaign_brands');

            $table->unsignedBigInteger('agancy_id');
            $table->foreign('agancy_id')->references('id')->on('campaign_agancies');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
