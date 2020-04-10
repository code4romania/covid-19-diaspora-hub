<?php

namespace App\Http\Resources\v1;

use App\Models\DiplomaticMission;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DiplomaticMissionCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = DiplomaticMission::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection;
    }
}
