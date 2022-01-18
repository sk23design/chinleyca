<?php

use App\Models\Event;
use App\Models\Venue;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(
        'welcome',
        ['venues' => \App\Models\Venue::all(), 'events' => \App\Models\Event::all()]
    );
});

Route::get('/venues', function () {
    return view('venues', ['venues' => \App\Models\Venue::all()]);
});

Route::get('/venue/{venue:slug}', function (Venue $venue) {
    return view('venue', ['venue' => $venue]);
});

Route::get('/events', function () {
    return view('events', ['events' => Event::all()]);
});

Route::get('/event/{event:slug}', function (Event $event) {
    return view('event', ['event' => $event]);
});

Route::get('/search', function (Request $request) {
    $venues =  Venue::search($request->search)->get()->toArray();
    $events = Event::search($request->search)->get()->toArray();

    $results = [];
    $results['venues'] = $venues;
    $results['events'] = $events;

    return $results;
});
