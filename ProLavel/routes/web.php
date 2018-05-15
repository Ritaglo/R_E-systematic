<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/about', function() {
    //returning views from routes..not advisable
    //using controllers instead
    //setting the route to go to a certain controller function that would return the view
    //terminal -> php artisan make:controller (insert name of controller )
    //      return view('pages.about');
});
// Below shows an example of creating dynamic urls
/*
    Route::get('/users/{id}', function($id ) {
        return 'This is user '.$id;
    });
*/
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/log',function(){
    return view('test');
});
// Route Parameters
/*
this is to capture the parameters passed with the URL
    two ways to do this:
    --Required Parameters
        should be mandatorily captured for routing
        Example: capturing users id from the url
        
*/