<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cover_letter_bodies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cover_personal_id')->constrained()->onDelete('cascade');
            $table->text('paragraph_text');
            $table->unsignedInteger('paragraph_order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cover_letter_bodies');
    }
};
