<?php

namespace App\Models;

use App\Enums\TypeTechnology;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Technology extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'icon',
        'color'
    ];

    public function employments(): MorphToMany
    {
        
        return $this->morphedByMany(Employment::class, 'technologyable');
    }

    protected function casts(): array
    {
        return [
            'slug' => 'slug',
            'type' => TypeTechnology::class
        ];
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => strtoupper($value),
            set: fn(string $value) => strtolower($value),
        );
    }

    protected function slug(): Attribute
    {
        return Attribute::make(
            get: fn(string $vale) => Str::slug($vale),
            set: fn(string $vale) => Str::slug($vale),
        );
    }

}
