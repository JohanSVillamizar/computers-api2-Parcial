<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id_computer,
            'brand' => $this->computer_brand,
            'model' => $this->computer_model,
            'price' => $this->computer_price,
            'ram_size' => $this->computer_ram_size,
            'is_laptop' => (bool) $this->computer_is_laptop,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
