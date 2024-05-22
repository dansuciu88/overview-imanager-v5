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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_address');
            $table->longText('project_description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('project_status',['offer','active','rejected','completed'])->default('offer');
            $table->string('project_number');
            $table->string('project_budget');
            $table->string('project_client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
