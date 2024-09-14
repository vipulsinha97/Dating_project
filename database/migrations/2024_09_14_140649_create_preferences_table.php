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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->reference('id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('smoke')->nullable();
            $table->string('drink')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('profile_with_children')->nullable();
            $table->string('religion')->nullable();
            $table->string('relaionship')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferences');
    }
};
