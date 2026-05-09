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
        Schema::create('task_user_worklogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_user_id');
            $table->foreign('task_user_id')->references('id')->on('task_users')->onDelete('cascade');

            $table->date('date');

            $table->integer('hours')->comment('چقدر کار انجام شده اون روز');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_user_worklogs');
    }
};
