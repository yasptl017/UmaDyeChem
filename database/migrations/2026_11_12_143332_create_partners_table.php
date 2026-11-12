<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation')->nullable(); // e.g. Partner / Founder, General Manager
            $table->string('photo')->nullable();
            $table->string('initials', 4)->nullable(); // fallback avatar initials, e.g. "RP"
            $table->string('avatar_color')->default('brand-700'); // Tailwind color class suffix for avatar background
            $table->text('bio')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
