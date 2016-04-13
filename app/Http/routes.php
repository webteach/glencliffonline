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



Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/public_announcements', function() {
     return view('public_announcements'); 
 });

Route::get('/teacher_area', function() {
    return view('teacher_area');
}); 




Route::get('/home', 'HomeController@index');

Route::get('/announcements', 'AnnouncementController@index');
Route::post('/announcement', 'AnnouncementController@store');
Route::delete('/announcement/{announcement}', 'AnnouncementController@destroy');

Route::auth();



Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');