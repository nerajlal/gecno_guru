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
        Schema::create('resume_name_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_name_personal_id')->constrained('resume_name_personals')->onDelete('cascade');
            $table->string('job_title');
            $table->string('company');
            $table->string('start_date');
            $table->string('end_date');
            $table->text('responsibilities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_name_experiences');
    }
};
