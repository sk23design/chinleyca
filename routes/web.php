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
    $page = \App\Models\Page::find(1)->first();

    return view(
        'welcome',
        [
        'venues' => \App\Models\Venue::take(3)->get(),
        'events' => \App\Models\Event::take(3)->get(),
        'villages' => \App\Models\Village::all(),
        'page' => $page,
        ]
    );
});

Route::get('/venues', function () {
    $page = \App\Models\Page::where('slug', 'venues')->first();

    return view('venues', ['venues' => \App\Models\Venue::all(), 'page' => $page]);
});

Route::get('/venue/{venue:slug}', function (Venue $venue) {
    return view('venue', ['venue' => $venue]);
});

Route::get('/events', function () {
    $page = \App\Models\Page::where('slug', 'activities')->first();

    return view('events', ['events' => Event::all(), 'page' => $page]);
});

Route::get('/event/{event:slug}', function (Event $event) {
    return view('event', ['event' => $event]);
});

Route::get('/activities', function () {
    $page = \App\Models\Page::where('slug', 'activities')->first();

    return view('events', ['events' => Event::all(), 'page' => $page]);
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

Route::get('/about', function () {
    $page = \App\Models\Page::where('slug', 'about')->first();

    return view('page', ['page' => $page]);
});

Route::get('/contact', function () {
    $page = \App\Models\Page::where('slug', 'contact')->first();

    return view('page', ['page' => $page]);
});

Route::get('/test', function () {
    /*

    FB_SECRET_KEY=31028bebf86d3785561d4982795fb9b5
FB_APP_ID=134406219963629
FB_ACCESS_TOKEN_OLD=EAAB6PeLZCHO0BAI2H7JBXpitGY1wjFmAPZCApcPURHsqHM03CoXDX9QHzARJAZCbQDe3ZBzfkbAAkXTkFM34in5wAHXc9blt3ffwu2twEkPDCTj7KgQJP6Aet80OjgTgmZBsDg3ZCNNHQAmA5jPrh6KDc53NlDkdVI8u9mDLHuxhDPlyFTY4gcFv6E4pLCtNjKIezNxmkszF7QT9Y5ZB1D3
FB_PAGENAME=sk23design


*/

    $fbSecretKey = '31028bebf86d3785561d4982795fb9b5';
    $fbAppId = '233236122274096';
    $fbPageName = 'keycarleasing';

    $response = fb_feed()->setAppId($fbAppId)->setSecretKey($fbSecretKey)->setPage($fbPageName)->feedLimit(12)->fetch();

    return $response;
});
