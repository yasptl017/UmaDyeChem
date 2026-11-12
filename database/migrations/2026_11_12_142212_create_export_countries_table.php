<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('export_countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('country_code', 2); // ISO 3166-1 alpha-2, used to highlight the map
            $table->string('region')->nullable(); // e.g. Middle East / GCC, Africa, Southeast Asia
            $table->text('notes')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('export_countries');
    }
};
