<?php

namespace App\Http\Resources\v1;

use App\Http\Resources\v1\TypeResource;
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
            'description' => $this->description,
            'type'        => $this->type->name ?? null,
            'categories'  => $this->categories->pluck('name'),

            'location' => [
                'address_line_1' => $this->address_line_1,
                'address_line_2' => $this->address_line_2,
                'city'           => $this->city,
                'county'         => $this->county,
                'postal_code'    => $this->postal_code,
                'country'        => $this->country,
                'latitude'       => $this->latitude,
                'longitude'      => $this->longitude,
            ],

            'contact' => [
                'email' => $this->email,
                'phone' => $this->phone,
                'url'   => $this->url,
            ],
        ];
    }
}
