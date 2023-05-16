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
        Schema::create('lecturer_identities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_login');
            $table->foreign('id_user_login')->references('id')->on('user_logins');
            $table->string('nid', 12);
            $table->string('name', 50);
            $table->string('gender', 10);
            $table->string('country', 15);
            $table->date('date_birth');
            $table->string('religion', 10);
            $table->text('address');
            $table->string('status', 15);
            $table->string('number_phone', 15);
            $table->string('email', 20);
            $table->string('last_education', 15);
            $table->string('major_last_education', 20);
            $table->string('division', 20);
            $table->string('position', 15);
            $table->date('date_join');
            $table->text('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturer_identities');
    }
};
