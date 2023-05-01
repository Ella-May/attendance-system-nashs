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
        Schema::create('attendance_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ar_subjectID')->nullable()->constrained('subject_infos', 'id')->onUpdate('set null');
            $table->foreignId('ar_studentId')->constrained('student_information', 'id');
            $table->string('ar_studentname');
            $table->bigInteger('ar_lrn');
            $table->enum('ar_gradelvl', ['Grade 11', 'Grade 12']);
            $table->string('ar_section');
            $table->date('ar_date');
            $table->string('ar_subject')->nullable();
            $table->string('ar_department')->nullable();
            $table->string('ar_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_reports');
    }
};
