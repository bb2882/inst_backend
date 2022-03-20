<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileContentResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'url' => $this->username,
            'description' => $this->description,
        ];
    }
}
