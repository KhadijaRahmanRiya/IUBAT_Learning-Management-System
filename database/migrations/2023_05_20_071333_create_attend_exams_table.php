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
        Schema::create('attend_exams', function (Blueprint $table) {
            $table->id();
            $table->integer('question_Id');
            $table->integer('course_id');
            $table->integer('student_id');
            // $table->string('question')->nullable();
            $table->string('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attend_exams');
    }
};
