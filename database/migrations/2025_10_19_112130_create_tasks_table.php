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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', [0,1,2])->default(0)->comment('0=>pending,1=>todo,2=>in_progress,3=>Done');
            $table->enum('priority', [0,1,2])->default(0)->comment('0=>low,1=>medium,2=>high');
            $table->integer('parent_id')->nullable();
            $table->string('start_date');
            $table->string('end_date')->nullable();

            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->unsignedBigInteger('manager_id')->nullable()->comment('مدیرتایید کننده');
            $table->foreign('manager_id')->references('id')->on('users');

            $table->unsignedBigInteger('watcher_id')->nullable()->comment('ناظر کاربر');
            $table->foreign('watcher_id')->references('id')->on('users');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
