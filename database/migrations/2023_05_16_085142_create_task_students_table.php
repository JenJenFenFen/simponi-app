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
        Schema::create('task_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_task_lecturer');
            $table->foreign('id_task_lecturer')->references('id')->on('task_lecturers');
            $table->text('task_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_students');
    }
};
