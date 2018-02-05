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

Route::get('/', function () {
  $first_name = "Youyou";
  $last_name = "kaktus";
    return view('welcome')->with(compact('first_name'));
});

Route::get('/about', function(){
  return view('about');
});

Route::get('/help', function(){
  return view('help');
});

Route::get('/events', function(){
  $data = [
    'Birthday party !!!',
    'Wedding party',
    'Holi party',
    'Meetup of Programming'
  ];

  return view('events/events', compact('data'));
});
