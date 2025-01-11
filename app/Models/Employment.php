<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Employment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'role',
        'description',
        'date_init',
        'date_finished',
        'company_name'
    ];

    public function skillable(): MorphToMany
    {
        return $this->morphToMany(Skill::class, 'skillable');
    }

    protected function role(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Str::ucfirst($value),
            set: fn(string $value) => Str::lower($value)
        );
    }

    protected function companyName(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Str::upper($value),
            set: fn(string $value) => Str::lower($value)
        );
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => preg_replace_callback(
                '/([.?!]\s*)([a-z])/',
                fn($matches) => $matches[1] . strtoupper($matches[2]),
                ucfirst(strtolower($value)) // Convierte a minúsculas todo y luego capitaliza la primera letra
            ),
            set: fn(string $value) => Str::lower($value)
        );
    }
}
