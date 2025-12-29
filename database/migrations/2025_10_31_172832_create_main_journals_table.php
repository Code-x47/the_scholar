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
        Schema::create('main_journals', function (Blueprint $table) {
            $table->id();
            $table->string('author')->nullable();
            $table->string('title')->nullable();
            $table->text('summary')->nullable();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->string('file')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('slug')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_journals');
    }
};
