<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dob');
            $table->string('birth');
            $table->string('sex');
            $table->string('religion');
            $table->string('maritalstatus');
            $table->string('nationality');
            $table->string('permanentaddress');
            $table->string('corresponaddress');
            $table->string('mobilenumber');
            $table->string('level');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
};
