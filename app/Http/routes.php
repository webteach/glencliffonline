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
});

Route::get('/sneekpeak', function () {
    return view('sneakpeak');
});

Route::get('/fabi', function () {
    return view('fabi');
});

Route::get('/amsr', function() {
    return view('amsr');
});
    
Route::get('/freshmen', function() {
    return view('freshmen');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/sports', function() {
    return view('news');
});

Route::get('/selfieoftheday', function() {
    return view('selfieoftheday');
});

Route::get('/eup', function () {
    return view('eup');
});

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/public_announcements', function() {
     return view('public_announcements'); 
 });

Route::get('/teacher_area', function() {
    return view('/auth/login');
}); 

Route::get('/sneakpeek', function () {
    return view('sneakpeek');
});

Route::get('/frc', function() {
    return view('frc');
});


Route::get('/home', 'HomeController@index');

Route::get('/announcements', 'AnnouncementController@index');
Route::post('/announcement', 'AnnouncementController@store');
Route::delete('/announcement/{announcement}', 'AnnouncementController@destroy');

Route::auth();



Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');