<?php

use App\Painting;
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
  //
    return view('welcome', array('theLocation' =>'Dunkirk'));
});

Route::get('about', function() {
  return 'About content goes here.';
});

Route::get('about/directions', function() {
  return 'Directions go here.';
});

Route::get('about/{theSubject}', function($theSubject) {
  return $theSubject.' content goes here.';
});

Route::get('about/classes/{theSubject}', function($theSubject) {
  return "Content about {$theSubject} classes goes here.";
});
