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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_series');
            $table->string('invoice_number');
            $table->string('invoice_amount');
            $table->dateTime('invoice_issue_date');
            $table->dateTime('invoice_due_date');
            $table->enum('invoice_status',['offer','not paid','paid','overdue'])->default('not paid');
            $table->string('invoice_client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
