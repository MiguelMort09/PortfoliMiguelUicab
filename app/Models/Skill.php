<?php

namespace App\Models;

use App\Enums\TypeTechnology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'level',
        'slug',
        'type',
        'link_icon',
    ];

    public function casts(): array
    {
        return [
            'type' => TypeTechnology::class,
        ];
    }

    public function skillables(): MorphToMany
    {
        return $this->morphedByMany(__CLASS__, 'skillable');
    }

}
