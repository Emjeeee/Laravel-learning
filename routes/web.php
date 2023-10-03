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
    return view('home');
});

// Route::<method>($url, $callback);
// Route::get($url, $callback);
// Route::post($url, $callback);
// Route::put($url, $callback);
// Route::patch($url, $callback);
// Route::delete($url, $callback);
// Route::options($url, $callback);

// Routing dibaca secara berurutan (atas -> kebawah)
Route::get('/student', function () {
    echo '<h1>STUDENT PAGE</h1>';
});

Route::get('/student/{nim}', function ($nim=0){
    echo '<h1>NIM : '.$nim.'</h1>';
});

// Grouping berdasarkan URL depan
Route::prefix('student')->group(function(){
    Route::get('/', function () {
        $students = [
            1 => [
                'nim'=>'2501990174',
                'nama'=>'Michael Jonathan'
            ],
            2 => [
                'nim'=>'2501234567',
                'nama'=>'Jeff Erio'
            ],
        ];
        return view('Student.Index', ['students' => $students]);
    });

    Route::get('/{nim?}', function ($nim=0){
        echo '<h1>NIM : '.$nim.'</h1>';
    });
});
