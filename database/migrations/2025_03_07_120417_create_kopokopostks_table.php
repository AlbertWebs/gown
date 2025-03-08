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
        Schema::create('kopokopostks', function (Blueprint $table) {
            $table->id();
            $table->string('TransID')->nullable();
            $table->string('TransAmount')->nullable();
            $table->string('TransStatus')->nullable();
            $table->string('TransSystem')->nullable();
            $table->string('TransCurrency')->nullable();
            $table->string('TransReference')->nullable();
            $table->string('TransTill')->nullable();
            $table->string('TransPhoneNumber')->nullable();
            $table->string('TransLastName')->nullable();
            $table->string('TransFirstName')->nullable();
            $table->string('TransMiddleName')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kopokopostks');
    }
};
