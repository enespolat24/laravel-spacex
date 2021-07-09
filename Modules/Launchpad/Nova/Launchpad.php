<?php

namespace Epigra\Launchpad\Nova;


use Epigra\Launch\Nova\Launch;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Resource;
use phpDocumentor\Reflection\Types\Float_;

class Launchpad extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Epigra\Launchpad\Models\Launchpad::class;
    public static $group = "spacex data";

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static function label()
    {
        return __('Launchpads');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',"region","full_name","name","provider_id","locality","status","latitude"
,"longitude"    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(__('UDID'), 'provider_id'),
            Text::make(__('Full name'), 'full_name'),
            Text::make(__('Name'), 'name')->sortable(),
            Text::make(__('Status'), 'status')->sortable(),
            Text::make(__('Locality'), 'locality'),
            Text::make(__('Region'), 'region'),
            Number::make(__('Latitude'), 'latitude'),
            Number::make(__('Longitude'), 'longitude'),
            HasMany::make(__('Launches'),'launch',Launch::class),
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
        return [];
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
}
