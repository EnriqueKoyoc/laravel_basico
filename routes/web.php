<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/quines-somos', 'about')->name('about');

Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');
Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');



Route::view('/contact', 'contact')->name('contact');
Route::get('contact', 'MessagesController@store')->name('messages.store');