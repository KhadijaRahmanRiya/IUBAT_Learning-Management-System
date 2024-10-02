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
        Schema::create('courselists', function (Blueprint $table) {
            $table->id();
            $table->string('course_Name');
            $table->foreignId('teacher_id');
            $table->foreignId('category_id');
            $table->integer('course_price');
            $table->string('course_duration');
            $table->string('course_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courselists');
    }
};
