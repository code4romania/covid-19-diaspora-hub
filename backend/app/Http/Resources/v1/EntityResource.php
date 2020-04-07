<?php

namespace App\Http\Resources\v1;

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
            'description' => $this->description,
            'type'        => $this->type->name ?? null,
            'categories'  => new CategoryCollection($this->categories), //$this->categories->pluck('name'),

            'address'     => $this->address,
            'latlng'      => $this->latitude . ',' . $this->longitude,
            'distance'    => $this->distance ? round($this->distance, 2) : null,

            'contact' => [
                'email' => $this->email,
                'phone' => $this->phone,
                'url'   => $this->url,
            ],
        ];
    }
}
