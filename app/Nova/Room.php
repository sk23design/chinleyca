<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Manogi\Tiptap\Tiptap;

class Room extends Resource
{
    public static $group = 'Venues';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Room::class;

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
            Image::make('thumbnail')->nullable(),
            Text::make(__('Room Name'), 'name')->sortable(),

            Image::make('cover_image')->hideFromIndex(),

            TipTap::make('description')->buttons([
                'heading',
                'italic',
                'bold',
                'code',
                'link',
                'strike',
                'underline',
                'superscript',
                'subscript',
                'bullet_list',
                'ordered_list',
                'code_block',
                'blockquote',
                'table',
                'horizontal_rule',
                'edit_html',
            ])
            ->headingLevels([2, 3, 4]),

            Text::make(__('Contact Name'), 'contact_name')->nullable(),
            Text::make(__('Contact Phone'), 'phone')->nullable(),
            Text::make(__('Contact Email'), 'email')->nullable(),
            Number::make('Capacity')->default(0),
            Currency::make(__('Price Per Hour'), 'price')->symbol('£'),
            Number::make('Minimum Booking')->default(1),
            Boolean::make('Active')->default(true),

            BelongsTo::make(__('Venue'), 'venue')->sortable(),
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
