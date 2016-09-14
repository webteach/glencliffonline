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

Route::get('fa_newsletter_09_2016.pdf', function() {
	return view('fa_newsletter_09_2016');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/sports', function() {
    return view('sports');
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
     return view('home'); 
 });



Route::get('/sneakpeek', function () {
    return view('sneakpeek');
});

Route::get('/frc', function() {
    return view('frc');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);


Route::group(['middleware' => ['auth']], function()
{
	// show new post form
	Route::get('new-post','PostController@create');
	
	// save new post
	Route::post('new-post','PostController@store');
	
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	
	// update post
	Route::post('update','PostController@update');
	
	// delete post
	Route::get('delete/{id}','PostController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	
	//display ballot
	Route::get('ballot', function() {
		return view('ballot'); });
	
});
	
	
//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');