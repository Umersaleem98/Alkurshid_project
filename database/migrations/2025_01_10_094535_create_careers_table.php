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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('position_name'); // Position name
            $table->text('description')->nullable(); // Job description
            $table->text('requirements')->nullable(); // Job requirements
            $table->string('standard_level'); // Standard level of the position
            $table->date('application_deadline')->nullable(); // Deadline for applications
            $table->string('department')->nullable(); // Department name
            $table->string('job_type')->default('Full-Time'); // Job type (Full-Time, Part-Time, etc.)
            $table->string('salary_range')->nullable(); // Expected salary range
            $table->string('status')->default('open'); // Status of the job posting
            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
};
