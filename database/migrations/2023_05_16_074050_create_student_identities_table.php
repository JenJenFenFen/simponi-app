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
        Schema::create('student_identities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_login');
            $table->foreign('id_user_login')->references('id')->on('user_logins');
            $table->string('nim', 12);
            $table->string('name', 50);
            $table->string('gender', 10);
            $table->string('country', 15);
            $table->date('date_birth');
            $table->string('religion', 10);
            $table->string('ktp', 20);
            $table->text('address');
            $table->string('status', 15);
            $table->string('number_phone', 15);
            $table->string('email', 50);
            $table->string('last_education', 15);
            $table->string('major_last_education', 20);
            $table->string('school_last_education', 50);
            $table->string('major', 20);
            $table->string('study_program', 15);
            $table->string('semester', 5);
            $table->string('academic_year', 10);
            $table->unsignedBigInteger('id_classname')->nullable();
            $table->foreign('id_classname')->references('id')->on('classnames');
            $table->text('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_identities');
    }
};
