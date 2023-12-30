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
        Schema::create('students_info', function (Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('registrationDate');
            $table->string('rollNo');
            $table->string('gender');
            $table->string('mobileNumber');
            $table->string('parentsName');
            $table->string('parentsMobileNumber');
            $table->string('dateOfBirth');
            $table->string('bloodGroup');
            $table->string('address');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_info');
    }
};
