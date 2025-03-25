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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('company_name');
            $table->string('vacancy');
            $table->string('age_range');
            $table->string('location');
            $table->string('salary');
            $table->string('experience')->nullable();
            $table->string('deadline');
            $table->string('gender')->nullable();
            $table->string('job_type')->nullable();
            $table->text('description')->nullable();
            $table->string('company_discription')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('company_number')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
