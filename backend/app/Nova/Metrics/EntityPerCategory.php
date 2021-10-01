<?php

declare(strict_types=1);

namespace App\Nova\Metrics;

use App\Models\Category;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class EntityPerCategory extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $categories = Category::all();

        $result = $categories
            ->where('builtin', true)
            ->flatMap(fn ($type) => [$type->name => $type->entities_count])
            ->toArray();

        $result[__('nova.others')] = $categories
            ->where('builtin', false)
            ->sum('entities_count');

        return $this->result($result);
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
        return 'entity-per-category';
    }
}
