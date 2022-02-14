<?php

use App\Models\Event;
use App\Models\Information;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
        [
        'venues' => \App\Models\Venue::all(),
        'events' => \App\Models\Event::all(),
        'villages' => \App\Models\Village::all(),
        ]
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

Route::get('/activities', function () {
    return view('events', ['events' => Event::all()]);
});

Route::get('/activity/{event:slug}', function (Event $event) {
    return view('event', ['event' => $event]);
});

Route::get('/search', function (Request $request) {
    $venues = Venue::search($request->search)->get()->toArray();
    $events = Event::search($request->search)->get()->toArray();

    $results = [];
    $results['venues'] = $venues;
    $results['events'] = $events;

    return $results;
});

Route::get('/information', function () {
    return view('informations', ['informations' => Information::where('enabled', 1)->get()]);
});

Route::get('/information/{information:slug}', function (Information $information) {
    return view('information', ['information' => $information]);
});

Route::get('/about-us', function () {
    return view('about-us');
});
