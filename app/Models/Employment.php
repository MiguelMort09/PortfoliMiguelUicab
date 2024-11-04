<?php

namespace App\Models;

use App\Enums\StatusJob;
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
        'company_name',
        'status',
        'date_init',
        'date_finished',
        'description'
    ];

    public function technologies(): MorphToMany
    {
        return $this->morphToMany(Technology::class, 'technologyable');
    }

    protected function casts(): array
    {
        return [
            'status' => StatusJob::class,
        ];
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
            set: fn(string $value) => Str::lower($value)
        );
    }
}
