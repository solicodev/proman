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
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('implementeunit_id')->nullable()->after('end_date');
            $table->foreign('implementeunit_id')->references('id')->on('implemente_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('implementeunit_id');
            $table->dropForeign('projects_implementeunit_id_foreign');
        });
    }
};
