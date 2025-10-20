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
        Schema::create('task_dependencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('predecessor_id')->unique();
            $table->foreign('predecessor_id')->references('id')->on('tasks')->onDelete('cascade');


            $table->unsignedBigInteger('successor_id')->unique();
            $table->foreign('successor_id')->references('id')->on('tasks')->onDelete('cascade');

            $table->enum('relation_Type',['FS','FF','SS','SF'])->comment('FS=>finish to start , FF=>finish to finish , SS=>start to start , SF=>start to finish');
            $table->integer('lag')->default(0)->comment('تاخیر در انجام تسک');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_dependencies');
    }
};
