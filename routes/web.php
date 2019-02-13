<?php

/**
    Going Through LARAVEL Collections
**/

Route::get('/', function () {return view('welcome');});

// Examples of LARAVEL Collections

// ToJson
Route::get('example-1', 'ExampleCollectionsController@example1')->name('collection.ex1');

// all vs toArray()
Route::get('example-2', 'ExampleCollectionsController@example2')->name('collection.ex2');


