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
        Schema::create('resume_name_certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_name_personal_id')->constrained('resume_name_personals')->onDelete('cascade');
            $table->string('certification_name');
            $table->string('issuing_organization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_name_certifications');
    }
};
