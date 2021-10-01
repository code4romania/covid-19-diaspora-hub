<?php

declare(strict_types=1);

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function toArray($request): array
    {
        return [
            'id'        => $this->id,
            'name'      => $this->name,
            'builtin'   => $this->builtin,
        ];
    }
}
