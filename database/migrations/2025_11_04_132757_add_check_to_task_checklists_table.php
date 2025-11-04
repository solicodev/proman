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
        Schema::table('task_checklists', function (Blueprint $table) {
            $table->enum('check',['0','1'])->default(0)->after('title')->comment('0=>no , 1=>yes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('task_checklists', function (Blueprint $table) {
            $table->dropColumn('check');
        });
    }
};
