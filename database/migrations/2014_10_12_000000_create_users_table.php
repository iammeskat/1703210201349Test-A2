<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('gender', 8);
            $table->string('city', 32);
            $table->string('address', 255);
            $table->string('phone_number', 32)->unique();
            $table->string('email', 32)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->tinyInteger('user_type');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
