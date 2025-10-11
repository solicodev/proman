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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->after('first_name');
            $table->string('mobile')->after('last_name')->unique();
            $table->string('personal_id')->after('mobile')->unique()->comment('کد پرسنلی');
            $table->enum('status',[0,1,2])->default(0)->after('personal_id');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('mobile');
            $table->dropColumn('personal_id');
            $table->dropColumn('status');
        });
    }
};
