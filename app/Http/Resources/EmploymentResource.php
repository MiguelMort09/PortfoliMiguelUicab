<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmploymentResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $skills = $this->skills->pluck(['name']);
        $technologies = $this->technologies->select(["name", "icon"]);

        return [
            'jobTitle' => $this->role,
            'companyName' => $this->company_name,
            'status' => $this->status->name,
            'dates' => $this->date_init . ($this->date_finished ? ' - ' . $this->date_finished : 'Actualmente'),
            'description' => $this->description,
            'technologies' => $technologies,
            'skills' => $skills
        ];
    }
}
