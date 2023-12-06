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

Route::get('/', function () {return view('welcome');});

// UNA ROTTA PER MOSTRARE IL NOSTRO STAFF
    
Route::get('/about-us', function() {

    //   $students = ['Pino', 'Gino', 'Genoveffo', 'Beppo'];

      $students = [
        ['name' => 'Gino',
        'age' => 23,
        'img' =>'/img/Gino.jpeg'],
        ['name' => 'Pino',
        'age' => 24],
        ['name' => 'Genoveffo',
    'age' => 25],
    ];


    return view('aboutUs',

    ['studenti' => $students]

);


    
});
