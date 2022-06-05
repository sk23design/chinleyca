<?php

namespace App\Nova;

use Manogi\Tiptap\Tiptap;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use Laraning\NovaTimeField\TimeField;
use Laravel\Nova\Http\Requests\NovaRequest;

class Notice extends Resource
{

    public static $group = 'Whats On';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Notice::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

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
            // Image::make('cover_image')->hideFromIndex()->hideFromIndex(),
            Image::make('Poster'),

            Text::make('Name')->sortable(),
            Text::make('Intro')->sortable()->hideFromIndex(),
            //  Slug::make('Slug')->from('Name')->hideFromIndex(),
            BelongsTo::make(__('Venue'))->nullable(),
            //Tiptap::make('Description'),
            Date::make('Start')->hideFromIndex(),
            TimeField::make('Start Time'),
            Date::make('End')->hideFromIndex(),
            TimeField::make('End Time'),
            Boolean::make('active')->default(true),
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
