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
        Schema::create('school_personnels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->string('p_firstname');
            $table->string('p_lastname');
            $table->string('p_midname');
            $table->enum('p_sex', ['Male', 'Female']);
            $table->string('p_address');
            $table->string('p_cnumber');
            $table->enum('p_position', ['Security Personnel', 'Faculty Member', 'Clinician', 'School Registrar', 'Principal']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_personnels');
    }
};
