<?php

declare(strict_types=1);

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;

class DiplomaticMission extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\DiplomaticMission::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'city',
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
        return __('nova.missions');
    }

    public static function singularLabel(): string
    {
        return __('nova.mission');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()
                ->hideFromIndex(),

            Text::make(__('nova.fields.city'), 'city')
                ->rules('required')
                ->sortable(),

            Textarea::make(__('nova.fields.address'), 'address')
                ->rules('required')
                ->showOnIndex(),

            $this->contactPanel(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
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
                Text::make(__('nova.fields.phone'), 'phone')
                    ->rules('nullable'),

                Text::make(__('nova.fields.email'), 'email')
                    ->rules('nullable', 'email'),

                Text::make(__('nova.fields.url'), 'url')
                    ->rules('nullable', 'url'),
            ]
        );
    }
}
