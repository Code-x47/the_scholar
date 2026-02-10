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
        Schema::create('references', function (Blueprint $table) {
            $table->id();

            $table->foreignId('article_id')->constrained()->cascadeOnDelete();

            $table->unsignedInteger('reference_order'); // 1,2,3...

            $table->text('citation');   // formatted reference text
            $table->string('doi')->nullable();
            $table->string('url')->nullable();

            $table->timestamps();

            $table->unique(['article_id', 'reference_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('references', function (Blueprint $table) {
            //
        });
    }
};
