<?php

declare(strict_types=1);

namespace App\Nova\Filters;

use App\Models\Type;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class TypeFilter extends Filter
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
        return __('nova.type');
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
        return $query->where('type_id', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function options(Request $request)
    {
        return Type::all(['id', 'name'])
            ->mapWithKeys(fn ($category) => [$category['name'] => $category['id']])
            ->toArray();
    }
}
