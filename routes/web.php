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

#create Route
Route::get('/about', function () {
    echo "`<h1>Hi Sawadee Kub</h1>";
});

Route::get('/users', function (){
    echo "Hello Phanurat";
    echo "Hello Phanurat";
    echo "Hello Phanurat";
});
