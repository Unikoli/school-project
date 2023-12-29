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
        Schema::create('professors_info', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('dateOfJoining');
            $table->string('password');
            $table->string('confirmPassword');
            $table->integer('mobileNumber');
        //    $table->string('gender');
            $table->string('designation');
        //    $table->string('department');
            $table->string('dateOfBirth');
            $table->string('education');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors_info');
    }
};
