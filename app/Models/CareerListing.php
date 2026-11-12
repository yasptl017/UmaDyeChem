<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'employment_type',
        'experience_level',
        'description',
        'responsibilities',
        'requirements',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getResponsibilitiesListAttribute(): array
    {
        if (empty($this->responsibilities)) return [];
        return array_filter(array_map('trim', explode("\n", str_replace("\r", "", $this->responsibilities))));
    }

    public function getRequirementsListAttribute(): array
    {
        if (empty($this->requirements)) return [];
        return array_filter(array_map('trim', explode("\n", str_replace("\r", "", $this->requirements))));
    }
}
