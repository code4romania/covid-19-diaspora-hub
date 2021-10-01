<?php

declare(strict_types=1);

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EntityCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = EntityResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection;
    }
}
