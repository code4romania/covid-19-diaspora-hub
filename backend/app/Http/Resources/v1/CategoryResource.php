<?php

namespace App\Http\Resources\v1;

use App\Http\Resources\v1\EntityCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'entities'    => $this->entities->count(),
            'links' => [
                'self'     => route('api.v1.categories.show', $this),
                'entities' => route('api.v1.categories.entities', $this),
            ],
        ];
    }
}
