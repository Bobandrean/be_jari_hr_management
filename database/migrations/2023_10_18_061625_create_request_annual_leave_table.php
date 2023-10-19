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
        Schema::create('request_annual_leave', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_employee');
            $table->integer('quota');
            $table->timestamps();
            $table->softDeletes(); // Add soft delete column 'deleted_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_annual_leave');
    }
};
