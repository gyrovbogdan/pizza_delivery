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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('note')->nullable();
            $table->string('role');
            $table->date('hired_on');
            $table->timestamps();
            $table->unique(['phone_number']);
            $table->unique(['email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
