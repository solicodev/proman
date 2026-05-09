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
        Schema::table('task_users', function (Blueprint $table) {
            $table->integer('hours_per_day')->default(0)->after('status');
            $table->integer('allocated_hours')->default(0)->after('hours_per_day');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('task_users', function (Blueprint $table) {
            $table->dropColumn('hours_per_day');
            $table->dropColumn('allocated_hours');
        });
    }
};
