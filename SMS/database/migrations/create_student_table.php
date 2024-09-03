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
        Schema::create('student', function (Blueprint $table) {
           
            $table->id('index_no');
            $table->string('f_name');
            $table->string('ini_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('phone_no',20);
            $table->string('email');
            $table->date('regis_date');
            $table->integer('grade');
            $table->string('guar_name');
            $table->string('guar_nic');
            $table->string('description')->nullable();
            $table->string('religion');
            $table->unsignedBigInteger('grade_id');
            $table->foreignId('grade_id')->references('grade_id')->on('grades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
