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
        Schema::create('students', function (Blueprint $table)
        {
            $table->id();
            $table->string('student_name');
            $table->foreignId('courselists_id');
            $table->foreignId('teacher_id');
            $table->string('student_image')->nullable();
            $table->string('student_email');
            $table->string('student_mobile');
            $table->string('student_address');
            $table->string('student_gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
