<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Panel;
use Silvanite\NovaFieldCheckboxes\Checkboxes;

class Event extends Resource
{
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
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Title'),
            Slug::make('Slug')->from('title'),
            BelongsTo::make(__('Venue')),
            Select::make('type')->options(['Private Booking', 'Public Booking', 'Maintenance', 'Not Available', 'Other']),
            Trix::make('description'),
            DateTime::make('start'),
            DateTime::make('end'),
            Boolean::make('active'),
            Boolean::make('recurring'),
            Checkboxes::make('Categories')
                ->options(\App\Models\Category::pluck('name', 'id')->toArray())->withoutTypeCasting()
                ->hideFromIndex(),

            new Panel('Recurring', $this->recurringPanel()),
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
