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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps('start_date');
            $table->timestamps('end_date');
            $table->enum('status',[0,1,2,3])->default(0);
            $table->unsignedBigInteger('manager_id')->comment('مدیر ایجاد کننده پروژه');
            $table->unsignedBigInteger('category_id')->comment('مدیر ایجاد کننده پروژه');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
