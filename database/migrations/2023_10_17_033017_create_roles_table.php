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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();             // Creates an auto-incrementing primary key column 'id'
            $table->string('title');   // Creates a 'title' column of type VARCHAR
            $table->softDeletes();     // Adds the 'deleted_at' column for soft deletes
            $table->timestamps();      // Adds 'created_at' and 'updated_at' timestamp columns 
            // You can add more columns and constraints here as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
