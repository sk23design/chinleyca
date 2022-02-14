<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Manogi\Tiptap\Tiptap;

class Village extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Village::class;

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
            Image::make('Cover Image'),
            Text::make('Name')->sortable(),

            Slug::make('slug')->from('name'),
            Textarea::make('Intro')->hideFromIndex(),
            TipTap::make('Description')->buttons([
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
            ])
            ->headingLevels([2, 3, 4]),

            Text::make('Meta Title')->hideFromIndex(),
            Boolean::make('Enabled'),
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
