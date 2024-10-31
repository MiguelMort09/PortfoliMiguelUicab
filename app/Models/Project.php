<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'resume',
        'git_url',
        'project_cover'
    ];

    public function technologies(): MorphMany
    {
        return $this->morphMany(Technology::class, 'technologyable');
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Str::upper($value),
            set: fn(string $value) => Str::lower($value)
        );
    }

    protected function resume(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Str::ucfirst($value),
            set: fn(string $value) => Str::lower($value)
        );
    }
}
