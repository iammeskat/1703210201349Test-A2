<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unique();           
            $table->string('name', 128);
            $table->string('gender', 8);
            $table->date('dob');
            $table->string('department', 128);
            $table->string('batch', 8);
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('district_id');
            $table->string('phone_number', 32)->unique();
            $table->string('email', 32)->unique();
            $table->timestamps();
            $table->foreign('division_id')
                    ->references('id')->on('districts')
                    ->onDelete('cascade');
            $table->foreign('district_id')
                    ->references('id')->on('districts')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
