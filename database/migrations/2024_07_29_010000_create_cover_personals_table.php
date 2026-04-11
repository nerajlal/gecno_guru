<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cover_personals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->date('letter_date');
            $table->string('closing_phrase'); // e.g., "Sincerely"
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cover_personals');
    }
};
