<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::<method>($url, $callback);
// Route::get($url, $callback);
// Route::post($url, $callback);
// Route::put($url, $callback);
// Route::patch($url, $callback);
// Route::delete($url, $callback);
// Route::options($url, $callback);
