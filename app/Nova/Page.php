<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Manogi\Tiptap\Tiptap;

class Page extends Resource
{
    public static $group = 'Content';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Page::class;

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
            Text::make('Subtitle')->sortable(),
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
            Select::make('Template')->options([
                'Page' => 'Page',
                'Events' => 'Events',
                'Venues' => 'Venues',
            ])->default('Page'),
            Boolean::make('Enabled')->default(true),
            Boolean::make('Show Contact Form')->default(false),
            new Panel('Fundraising', $this->fundraisingFields()),
            HasMany::make('Documents'),
         
        ];
    }


    public function fundraisingFields()
    {
        return [
            Boolean::make('Show Fundraising Target')->default(false),
            
            Text::make('Fundraising Target')->hideFromIndex(),
            Text::make('Fundraising So Far')->hideFromIndex(),
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
