<?php

use Illuminate\Support\Facades\Route;

Route::view('contacto', 'contact')->name('contact');
Route::view('asesoramiento', 'counseling')->name('counseling');
Route::view('/', 'home')->name('home');
Route::view('programas', 'programs')->name('programs');
Route::get('personas', 'App\Http\Controllers\PeopleController@index')->name('people.index');
Route::get('personas/{id}', 'App\Http\Controllers\PeopleController@show')->name('people.show')->where('id', '[0-9]+');
Route::get('personas/crear', 'App\Http\Controllers\PeopleController@create')->name('people.create');
Route::post('personas', 'App\Http\Controllers\PeopleController@store')->name('people.store');
//Route::view('talleres', 'workshop')->name('workshop');
//Route::get('talleres', 'App\Http\Controllers\WorkshopController@index')->name('workshop');
