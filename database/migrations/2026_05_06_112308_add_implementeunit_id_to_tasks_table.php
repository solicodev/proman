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
            $table->unsignedBigInteger('implementeunit_id')->nullable()->after('project_id')->comment('واحد انجام دهنده تسک');
            $table->foreign('implementeunit_id')->references('id')->on('implemente_units')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign('implementeunit_id');
            $table->dropColumn('implementeunit_id');
        });
    }
};
