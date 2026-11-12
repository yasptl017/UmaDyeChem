<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'short_description',
        'description',
        'image',
        'cas_number',
        'molecular_formula',
        'molecular_weight',
        'appearance',
        'grade',
        'concentration',
        'ph_value',
        'specific_gravity',
        'so2_content',
        'packaging',
        'applications',
        'industries',
        'specifications_json',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_active',
        'is_featured',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'specifications_json' => 'array',
        ];
    }

    public function inquiries(): HasMany
    {
        return $this->hasMany(Inquiry::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function getApplicationsListAttribute(): array
    {
        if (empty($this->applications)) return [];
        return array_filter(array_map('trim', explode("\n", str_replace("\r", "", $this->applications))));
    }

    public function getIndustriesListAttribute(): array
    {
        if (empty($this->industries)) return [];
        return array_filter(array_map('trim', explode("\n", str_replace("\r", "", $this->industries))));
    }
}

