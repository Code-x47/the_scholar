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
          Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('issue_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('abstract');
            $table->longText('content')->nullable(); // or markdown
            $table->string('pdf_path')->nullable();
            $table->string('doi')->nullable();
            $table->date('published_at')->nullable();
            $table->enum('status', ['submitted', 'accepted', 'published'])->default('submitted');
            $table->timestamps();

            $table->index('status');
            $table->index('published_at');
          });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
