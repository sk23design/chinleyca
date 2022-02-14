<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use Manogi\Tiptap\Tiptap;

class Venue extends Resource
{
    public static $group = 'Venues';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Venue::class;

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
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Image::make('Cover Image')->path('images/venues/'),
            Text::make('Name'),
            Text::make(__('Town / Village'), 'town')->hideFromIndex(),
            Slug::make('Slug')->from('name')->hideFromIndex(),
            Text::make('Intro')->hideFromIndex(),
            Tiptap::make('Description'),
            Text::make('Website')->hideFromIndex(),
            Boolean::make('Use External Website')->help('Bookings should be made directly with the venue'),
            HasMany::make('Events'),
           //HasMany::make('Rooms'),
           new Panel('Contact Details', $this->contactPanel()),
           new Panel('Occupancy Details', $this->addressPanel()),
           new Panel('Address Details', $this->occupancyPanel()),
        ];
    }

    public function occupancyPanel()
    {
        return [
            Text::make('Address1')->hideFromIndex(),
            Text::make('Address2')->hideFromIndex(),
            Text::make('Town')->hideFromIndex(),
            Text::make('County')->hideFromIndex(),
            Text::make('Postcode')->hideFromIndex(),
            // Text::make('Lat')->hideFromIndex(),
            // Text::make('Long')->hideFromIndex(),
        ];
    }

    public function addressPanel()
    {
        return [
            Number::make('Capacity')->hideFromIndex(),
            Currency::make('Price')->hideFromIndex()->help('Price per hour')->symbol('£'),
            Number::make('Minimum Booking')->hideFromIndex()->help('Minimum Booking Period'),
        ];
    }

    public function contactPanel()
    {
        return [
            Text::make('Contact Name')->hideFromIndex(),
            Text::make('Email')->hideFromIndex(),
            Text::make('Phone')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
