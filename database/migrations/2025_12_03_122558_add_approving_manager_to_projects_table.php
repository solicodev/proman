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
            $table->unsignedBigInteger('approving_manager')->after('status')->comment('مدیر تایید کننده')->nullable();
            $table->foreign('approving_manager')->references('id')->on('users');

            $table->enum('approve_need',[0,1])->after('approving_manager')->default(0)->nullable()->comment('0=>yes , 1=>no');
            $table->enum('approve_verify',[0,1])->after('approve_need')->default(0)->nullable()->comment('0=>yes , 1=>no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('approving_manager');
            $table->dropColumn('approve_need');
            $table->dropColumn('approve_verify');
        });
    }
};
