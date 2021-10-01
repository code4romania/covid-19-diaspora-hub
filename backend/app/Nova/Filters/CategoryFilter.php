<?php

declare(strict_types=1);

namespace App\Nova\Filters;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class CategoryFilter extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * Get the displayable name of the filter.
     *
     * @return string
     */
    public function name()
    {
        return __('nova.category');
    }

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request              $request
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  mixed                                 $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        return $query->whereHas('categories', function (Builder $q) use ($value) {
            return $q->where('categories.id', $value);
        });
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function options(Request $request)
    {
        return Category::all(['id', 'name'])
            ->mapWithKeys(fn ($category) => [$category['name'] => $category['id']])
            ->toArray();
    }
}
