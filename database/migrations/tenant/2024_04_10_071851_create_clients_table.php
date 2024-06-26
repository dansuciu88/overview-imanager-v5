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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_telephone');
            $table->string('client_email');
            $table->string('client_address');
            $table->string('client_pj_name')->nullable();
            $table->string('client_pj_cui')->nullable();
            $table->string('client_pj_j')->nullable();
            $table->string('client_pj_bank')->nullable();
            $table->string('client_pj_iban')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
