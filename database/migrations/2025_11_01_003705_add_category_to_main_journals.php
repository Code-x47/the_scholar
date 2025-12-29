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
        Schema::table('main_journals', function (Blueprint $table) {
            $table->enum("category",['Natural Sciences','Engineering and Technology','Medical and Health Sciences',
            'Agricultural Sciences','Social Sciences','Humanities and Arts','Business and Economics','Education and Pedagogy','Environmental Studies',
            'Computer Science and Information Technology','Multidisciplinary'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('main_journals', function (Blueprint $table) {
            //
        });
    }
};
