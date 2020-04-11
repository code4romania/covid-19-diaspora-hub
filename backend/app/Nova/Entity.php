<?php

namespace App\Nova;

use App\Nova\Filters\CategoryFilter;
use App\Nova\Filters\LocationFilter;
use App\Nova\Filters\TypeFilter;
use App\Nova\Type;
use Benjacho\BelongsToManyField\BelongsToManyField;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;

class Entity extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Entity::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * Get the search result subtitle for the resource.
     *
     * @return string
     */
    public function subtitle()
    {
        return collect([$this->city, $this->country_name])
            ->implode(', ');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
        'description',
        'city',
        'country',
    ];

    /**
     * The logical group associated with the resource.
     */
    public static function group(): string
    {
        return __('nova.entities');
    }

    public static function label(): string
    {
        return __('nova.entities');
    }

    public static function singularLabel(): string
    {
        return __('nova.entity');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()
                ->hideFromIndex(),

            Text::make(__('nova.fields.name'), 'name')
                ->rules('required')
                ->sortable(),

            Textarea::make(__('nova.fields.description'), 'description')
                ->rules('required')
                ->alwaysShow(),

            BelongsTo::make(__('nova.type'), 'type', Type::class),

            BelongsToManyField::make(__('nova.categories'), 'categories', Category::class)
                ->rules('required'),

            $this->contactPanel(),

            $this->addressPanel(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new CategoryFilter,
            new TypeFilter,
            new LocationFilter,
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    protected function contactPanel(): Panel
    {
        return new Panel(
            __('nova.panels.contact'),
            [
                Text::make(__('nova.fields.email'), 'email')
                    ->rules('nullable', 'email')
                    ->hideFromIndex(),

                Text::make(__('nova.fields.phone'), 'phone')
                    ->rules('nullable')
                    ->hideFromIndex(),

                Text::make(__('nova.fields.url'), 'url')
                    ->rules('nullable', 'url')
                    ->hideFromIndex(),
            ]
        );
    }

    protected function addressPanel(): Panel
    {
        return new Panel(
            __('nova.panels.address'),
            [
                Boolean::make(__('nova.fields.location'), 'lat_lng')
                    ->onlyOnIndex(),

                Text::make(__('nova.fields.address_line_1'), 'address_line_1')
                    ->hideFromIndex(),

                Text::make(__('nova.fields.address_line_2'), 'address_line_2')
                    ->hideFromIndex()
                    ->sortable(),

                Place::make(__('nova.fields.city'), 'city')
                    ->onlyCities()
                    ->state('county')
                    ->sortable(),

                Text::make(__('nova.fields.county'), 'county'),

                Text::make(__('nova.fields.postal_code'), 'postal_code')
                    ->hideFromIndex(),

                Country::make(__('nova.fields.country'), 'country')
                    ->sortable(),

                Text::make(__('nova.fields.latitude'), 'latitude')
                    ->hideFromIndex(),

                Text::make(__('nova.fields.longitude'), 'longitude')
                    ->hideFromIndex(),
            ]
        );
    }
}
