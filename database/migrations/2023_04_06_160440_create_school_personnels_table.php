<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('school_personnels', function (Blueprint $table) {
            $table->id()->from(2000);
            $table->foreignId('userID')->constrained('users');
            $table->string('p_firstname');
            $table->string('p_midname')->nullable();
            $table->string('p_lastname');
            $table->enum('p_sex', ['Male', 'Female']);
            $table->string('p_address')->nullable();
            $table->string('p_cnumber')->nullable();
            $table->enum('p_position', ['Security Personnel', 'Faculty Member', 'Clinician', 'School Registrar', 'Principal'])->nullable();
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
