<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('projects/{id}', function ($id) {
    return view('projects')->with('id', $id);
});

Route::get('projects', function () {
    return view('projects-summary');
})->name('projects-summary');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
