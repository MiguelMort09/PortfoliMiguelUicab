<?php

namespace App\Http\Controllers\API;

use App\Enums\TypeTechnology;
use App\Http\Controllers\Controller;
use App\Http\Resources\TechnologiesResource;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            Skill::all()
                ->groupBy('type')
                ->map(fn($items, $type) => [
                    'type' => __(TypeTechnology::tryFrom($type)->name),
                    'technologies' => TechnologiesResource::collection($items)
                ])
                ->sortByDesc(fn($group) => count($group['technologies']))
                ->values()
                ->jsonSerialize()
        );
    }
}
