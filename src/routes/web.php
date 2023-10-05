<?php

use Illuminate\Support\Facades\Route;

$namespace = "Ninhnk\FirstPackage\Http\Controllers";

Route::namespace($namespace)->middleware(['web'])->group(function() {
    Route::get('sign-in', 'FirstPackageController@index')->name('sign-in');
    Route::post('sign-in', 'FirstPackageController@signIn')->name('submit');
    Route::post('sign-out', 'FirstPackageController@signOut')->name('sign-out');
    Route::get('home', 'FirstPackageController@home')->name('home');
});
