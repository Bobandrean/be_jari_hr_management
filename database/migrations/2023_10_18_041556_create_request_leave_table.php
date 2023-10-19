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
            $table->boolean('status')->default(false);
            $table->string('is_approved_reject_remark')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
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
