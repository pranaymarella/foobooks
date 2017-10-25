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

// Practice
Route::any('/practice/{n?}', 'PracticeController@index');



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController');

Route::get('/book/', 'BookController@index');

Route::get('/book/{title}', 'BookController@show');

// Route::get('/example', function() {
//     return Hash::make('topsecret');
// });

Route::get('/example', 'BookController@example');

Route::get('/trivia', 'TriviaController@index');

Route::get('/trivia/check-answer', 'TriviaController@checkAnswer');

// Route::get('/book/{title}', function($title) {
//     // # Query the books table where title matches $title
//     return 'You are viewing '.$title;
// });

// Route::get('/book/{category}/{title}', function($category, $title) {
//     return "You are viewing: """;
// });
