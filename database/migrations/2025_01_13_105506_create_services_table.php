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
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('icon'); // For storing the FontAwesome icon class (e.g., fas fa-heartbeat)
            $table->string('images'); // For storing the FontAwesome icon class (e.g., fas fa-heartbeat)
            $table->string('title'); // Service title (e.g., Nesciunt Mete)
            $table->text('description'); // Service description
            $table->string('link')->nullable(); // Optional link for the 'stretched-link'
            $table->timestamps(); // For created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
