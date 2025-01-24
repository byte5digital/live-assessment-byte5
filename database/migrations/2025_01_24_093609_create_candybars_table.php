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
        Schema::create('candy_bars', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('quantity')->default(0);
            $table->integer('popularity')->default(0);
            $table->boolean('contains_chocolate')->default(false);
            $table->date('last_bought');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candy_bars');
    }
};
