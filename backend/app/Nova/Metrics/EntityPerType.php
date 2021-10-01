<?php

declare(strict_types=1);

namespace App\Nova\Metrics;

use App\Models\Type;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class EntityPerType extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->result(
            Type::all()
                ->flatMap(fn ($type) => [$type->name => $type->entities_count])
                ->toArray()
        );
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'entity-per-type';
    }
}
