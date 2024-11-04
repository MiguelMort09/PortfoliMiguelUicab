<?php

namespace App\Models;

use App\Enums\LevelSkill;
use App\Enums\TypeSkill;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'level',
        'proficiency',
        'is_technical',
        'type'
    ];

    public function casts(): array
    {
        return [
            'level' => LevelSkill::class,
            'is_technical' => 'boolean',
            'type' => TypeSkill::class
        ];
    }

    public function employments(): HasMany
    {
        return $this->hasMany(Employment::class);
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn($value) => (bool)$value
        );
    }
}
