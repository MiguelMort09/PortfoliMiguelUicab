<?php

namespace App\Http\Controllers;

use App\Enums\TypeTechnology;
use App\Http\Resources\TechnologiesResource;
use App\Models\Technology;

class TechnologiesController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            Technology::all()
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
