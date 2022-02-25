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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('password');
            $table->string('dob');
            $table->string('sex');
            $table->string('religion');
            $table->string('maritalstatus');
            $table->string('nationality');
            $table->string('permanentaddress');
            $table->string('corresponaddress');
            $table->string('mobilenumber');
            $table->string('email');
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
        Schema::dropIfExists('clients');
    }
};
