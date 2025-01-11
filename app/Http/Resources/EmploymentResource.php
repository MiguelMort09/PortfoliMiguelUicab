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

        return [
            'id' => $this->id,
            'jobTitle' => $this->role,
            'companyName' => $this->company_name,
            'dates' => $this->date_init . ($this->date_finished ? ' - ' . $this->date_finished : 'Actualmente'),
            'description' => $this->description,

        ];
    }
}
