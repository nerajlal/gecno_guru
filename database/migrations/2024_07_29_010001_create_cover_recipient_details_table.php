<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cover_recipient_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cover_personal_id')->constrained()->onDelete('cascade');
            $table->string('hiring_manager_name');
            $table->string('hiring_manager_title')->nullable();
            $table->string('company_name');
            $table->text('company_address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cover_recipient_details');
    }
};
