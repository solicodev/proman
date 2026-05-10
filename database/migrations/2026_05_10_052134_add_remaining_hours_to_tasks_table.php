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
            $table->decimal('remaining_hours', 8, 2)
                ->nullable()->after('estimated_hours');

            $table->timestamp('actual_start_date')
                ->nullable()->after('end_date');

            $table->timestamp('actual_end_date')
                ->nullable()->after('actual_start_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('remaining_hours');
            $table->dropColumn('actual_start_date');
            $table->dropColumn('actual_end_date');
        });
    }
};
