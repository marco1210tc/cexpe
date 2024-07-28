<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::view('/', 'home')->name('home');

Route::view('contacto', 'contact')->name('contact');
Route::post('contacto', 'App\Http\Controllers\ContactController@store')->name('contact.store');

Route::resource('personas', PeopleController::class)->names('people');

// Route::view('/', 'home')->name('home');
// Route::get('personas', 'App\Http\Controllers\PeopleController@index')->name('people.index');
// Route::get('personas/{id}', 'App\Http\Controllers\PeopleController@show')->name('people.show')->where('id', '[0-9]+');
// Route::get('personas/{id}/editar', 'App\Http\Controllers\PeopleController@edit')->name('people.edit');
// Route::patch('personas/{id}', 'App\Http\Controllers\PeopleController@update')->name('people.update');
// Route::get('personas/crear', 'App\Http\Controllers\PeopleController@create')->name('people.create');
// Route::post('personas', 'App\Http\Controllers\PeopleController@store')->name('people.store');
// Route::delete('personas/{persona}', 'App\Http\Controllers\PeopleController@destroy')->name('people.destroy');