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
        Schema::create('request_leave', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_employee');
            $table->date('leave_from');
            $table->date('leave_to');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('is_approved', ['approved', 'rejected', 'pending'])->nullable();
            $table->string('reject_remark')->nullable();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('request_leave');
    }
};
