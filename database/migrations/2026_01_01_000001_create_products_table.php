<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category')->default('Ammonium Bisulphite');
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('cas_number')->nullable();
            $table->string('molecular_formula')->nullable();
            $table->string('molecular_weight')->nullable();
            $table->string('appearance')->nullable();
            $table->string('grade')->nullable();
            $table->string('concentration')->nullable();
            $table->string('ph_value')->nullable();
            $table->string('specific_gravity')->nullable();
            $table->string('so2_content')->nullable();
            $table->string('packaging')->nullable();
            $table->text('applications')->nullable();
            $table->text('industries')->nullable();
            $table->text('specifications_json')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

