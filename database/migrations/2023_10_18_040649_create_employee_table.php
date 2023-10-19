<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->index('full_name');
            $table->date('birth_date');
            $table->string('location_birth');
            $table->string('location_exist');
            $table->longText('address');
            $table->string('url_avatar')->nullable();
            $table->date('join_date');
            $table->unsignedBigInteger('position_id');
            $table->string('nik')->unique();
            $table->integer('salary')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('password');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
