<?php

use App\Models\Venue;
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
    return view('welcome',
    ['venues' => \App\Models\Venue::all()]
);
});

Route::get('/venues', function () {
    return view('venues', ['venues' => \App\Models\Venue::all()]);
});

Route::get('/venue/{venue:slug}', function (Venue $venue) {
    return view('venue', ['venue' => $venue]);
});

Route::get('/events', function () {
    return view('events', ['events' => \App\Models\Event::all()]);
});
