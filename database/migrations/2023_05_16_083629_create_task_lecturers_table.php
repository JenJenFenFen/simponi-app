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
        Schema::create('task_lecturers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lecturer_identity');
            $table->foreign('id_lecturer_identity')->references('id')->on('lecturer_identities');
            $table->unsignedBigInteger('id_classname');
            $table->foreign('id_classname')->references('id')->on('classnames');
            $table->unsignedBigInteger('id_material');
            $table->foreign('id_material')->references('id')->on('materials');
            $table->string('task_name', 50);
            $table->text('description');
            $table->text('task_description_file');
            $table->date('deadline');
            $table->integer('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_lecturers');
    }
};
