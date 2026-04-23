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
        Schema::table('task_user', function (Blueprint $table) {
            $table->tinyInteger('progress',0,100)->after('user_id')->default(0);
            $table->enum('status',[0,1,2])->after('progress')->default(0);
            $table->string('started_at')->after('status')->nullable();
            $table->string('completed_at')->after('started_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('task_user', function (Blueprint $table) {
            //
        });
    }
};
