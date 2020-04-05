<?php

namespace App\Http\Resources\v1;

use App\Http\Resources\v1\EntityCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'     => $this->name,
            'entities' => $this->entities->map
                ->only(['id', 'name'])
                ->when(config('app.env') === 'documentation', fn ($colection) => $colection->forPage(1, 5)),
        ];
    }
}
