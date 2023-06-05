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
        Schema::create('student_classnames', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_classname');
            $table->foreign('id_classname')->references('id')->on('classnames');
            $table->unsignedBigInteger('id_student_identity');
            $table->foreign('id_student_identity')->references('id')->on('student_identities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_classnames');
    }
};
