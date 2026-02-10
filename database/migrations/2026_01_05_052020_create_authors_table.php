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
        
     Schema::create('authors', function (Blueprint $table) {
           
            $table->id();
            // Core identity
            $table->string('first_name');
            $table->string('last_name');

            // Contact & identifiers
            $table->string('email')->nullable();
            $table->string('orcid')->nullable()->unique();

            // Optional academic metadata
            $table->string('researcher_id')->nullable(); // e.g. ResearcherID, Scopus ID
            $table->string('country')->nullable();

            $table->timestamps();

            
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
