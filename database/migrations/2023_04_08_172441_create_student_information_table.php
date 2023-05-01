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
        Schema::create('student_information', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('lrn')->from(1000000000000)->unique();
            $table->string('s_firstname');
            $table->string('s_midname')->nullable();
            $table->string('s_lastname');
            $table->string('s_address');
            $table->string('s_cnumber');
            $table->string('g_name');
            $table->string('g_cnumber');
            $table->enum('s_gradelvl', ['Grade 11', 'Grade 12']);
            $table->string('s_section');
            $table->string('s_strand');
            $table->date('s_bday');
            $table->integer('s_age');
            $table->enum('s_sex', ['Male', 'Female']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_information');
    }
};
