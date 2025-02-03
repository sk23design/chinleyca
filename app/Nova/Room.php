<?php

namespace App\Nova;

use Manogi\Tiptap\Tiptap;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

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

    //  CREATE TABLE `rooms` (
    //     `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    //     `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    //     `cover_image` text COLLATE utf8mb4_unicode_ci,
    //     `thumbnail` text COLLATE utf8mb4_unicode_ci,
    //     `description` text COLLATE utf8mb4_unicode_ci,
    //     `venue_id` int(11) DEFAULT NULL,
    //     `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    //     `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    //     `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    //     `capacity` int(11) NOT NULL DEFAULT '0',
    //     `price` decimal(8,2) NOT NULL DEFAULT '0.00',
    //     `minimum_booking` decimal(8,2) NOT NULL DEFAULT '1.00',
    //     `active` tinyint(1) NOT NULL DEFAULT '1',
    //     `created_at` timestamp NULL DEFAULT NULL,
    //     `updated_at` timestamp NULL DEFAULT NULL,
    //     PRIMARY KEY (`id`)
    //   ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Name'),
            Text::make('Contact Name'),
            Text::make('Phone'),
            Text::make('Email'),
            Text::make('Capacity'),
            Text::make('Price'),
            Text::make('Minimum Booking'),
            Tiptap::make('Description'),
            BelongsTo::make('Venue'), 
            Boolean::make('Active'),
            HasMany::make('Bookings'),
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
