<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FollowersResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'profile' => $this->profile,
            'username' => $this->username,
            'description' => $this->description,
        ];
    }
}
