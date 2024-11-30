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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('age_group')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->date('event_date')->nullable();
            $table->string('event_start_time')->nullable();
            $table->integer('event_duration')->nullable();
            $table->string('ticket_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
