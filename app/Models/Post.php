<?php

namespace App\Models;

use App\Enums\StatusPost;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'resume',
        'content',
        'project_cover',
        'status'
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
            set: fn(string $value) => Str::lower($value)
        );
    }

    protected function content(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Str::ucfirst($value),
            set: fn(string $value) => Str::lower($value)
        );
    }

    protected function casts(): array
    {
        return [
            'status' => StatusPost::class
        ];
    }

}
