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
        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('daily_hours')->after('duration_type')->comment('روزی چند ساعت برای تسک در نظر گرفته شود')->nullable();
            $table->integer('planned_hours')->after('daily_hours')->comment('مجموع ساعتی که برای این تسک در نظر گرفته شده است')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('daily_hours');
            $table->dropColumn('planned_hours');
        });
    }
};
