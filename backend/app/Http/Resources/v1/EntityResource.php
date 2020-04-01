<?php

namespace App\Http\Resources\v1;

use App\Http\Resources\v1\CategoryCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class EntityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function toArray($request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'type'        => $this->type,
            'description' => $this->description,
            'categories'  => new CategoryCollection($this->categories),

            'location' => [
                'country'   => $this->country,
                'city'      => $this->city,
                'address'   => $this->address,
                'latitude'  => $this->latitude,
                'longitude' => $this->longitude,
            ],

            'contact' => [
                'email' => $this->email,
                'phone' => $this->phone,
                'url'   => $this->url,
            ],

            'links' => [
                'self' => route('api.v1.entities.show', $this),
            ]
        ];
    }
}
