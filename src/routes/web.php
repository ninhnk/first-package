<?php

use Illuminate\Support\Facades\Route;

$namespace = "Ninhnk\FirstPackage\Http\Controllers";

Route::namespace($namespace)->group(function() {
    Route::get('demo', 'FirstPackageController@index');
});
