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
        Schema::create('sign', function (Blueprint $table) {
            $table->id();
            $table->string('SchoolName')->nullable();
            $table->string('Board')->nullable();
            $table->integer('Standard')->nullable();
            $table->json('Subjects')->nullable();
            $table->string('Medium')->nullable();
            $table->integer('Total_fees')->nullable();
            $table->integer('Discount')->nullable();
            $table->string('Shift')->nullable();
            $table->string('Reference')->nullable();
            $table->integer('Paid_fees')->nullable();
            $table->integer('Remaining_fees')->nullable();
            $table->date('Fees_date')->nullable();
            $table->date('Due_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign');
    }
};
