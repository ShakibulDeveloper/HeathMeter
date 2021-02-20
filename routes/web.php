<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('dashboard','DashboardController@dashboard')->name('dashboard');
Route::get('dashboard','DashboardController@ReturnHome');
Route::get('notice','DashboardController@notice');
Route::get('about','DashboardController@about');
Route::get('chat','DashboardController@chat');
