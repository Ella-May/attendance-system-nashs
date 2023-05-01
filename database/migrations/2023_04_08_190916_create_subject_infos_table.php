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
        Schema::create('subject_infos', function (Blueprint $table) {
            $table->id()->from(4000);
            $table->string('sub_name');
            $table->enum('sub_gradelvl', ['Grade 11', 'Grade 12']);
            $table->string('sub_strand');
            $table->string('sub_section');
            $table->enum('sub_day', ['Monday', 'Tuesday', 'Wednesday','Thursday', 'Friday']);
            $table->dateTime('sub_timestart');
            $table->dateTime('sub_timeend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_infos');
    }
};
