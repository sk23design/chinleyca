<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laraning\NovaTimeField\TimeField;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use Manogi\Tiptap\Tiptap;
use Silvanite\NovaFieldCheckboxes\Checkboxes;

class Event extends Resource
{
    public static $group = 'Content';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Event::class;

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
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->hideFromIndex(),

            // Image::make('cover_image')->hideFromIndex()->hideFromIndex(),
            Image::make('thumbnail'),

            Text::make('Title')->sortable(),
            Slug::make('Slug')->from('title')->hideFromIndex(),
            BelongsTo::make(__('Venue')),
            Select::make('type')->options(['Private Booking', 'Public Booking', 'Maintenance', 'Not Available', 'Other'])->hideFromIndex(),
            Tiptap::make('description'),
            Date::make('start')->hideFromIndex(),
            TimeField::make('time_start'),
            Date::make('end')->hideFromIndex(),
            TimeField::make('time_end'),
            Boolean::make('active')->default(true),
            Boolean::make('recurring'),
            Checkboxes::make('Categories')
                ->options(\App\Models\Category::pluck('name', 'id')->toArray())->withoutTypeCasting()
                ->hideFromIndex(),

            new Panel('Recurring', $this->recurringPanel()),
            new Panel('Contacts', $this->contactPanel()),
        ];
    }

    public function contactPanel()
    {
        return [
            Text::make('Website')->hideFromIndex(),
            Text::make('Contact Name')->hideFromIndex(),
            Text::make('Contact Email')->hideFromIndex(),
            Text::make('Contact Number')->hideFromIndex(),
        ];
    }

    public function recurringPanel()
    {
        return [
            Checkboxes::make('Days')
                ->options([
                    1 => 'Monday',
                    2 => 'Tuesday',
                    3 => 'Wednesday',
                    4 => 'Thursday',
                    5 => 'Friday',
                    6 => 'Saturday',
                    7 => 'Sunday',
                ])->withoutTypeCasting()
                ->hideFromIndex(),

            Checkboxes::make('Every')
                ->options([
                    1 => 'Week',
                    2 => 'Month',
                    3 => 'Year',
                ])->withoutTypeCasting()
                ->hideFromIndex(),
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
