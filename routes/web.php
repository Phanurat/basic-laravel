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
/*Route::get('/about', function () {
    echo "`<h1>Hi Sawadee Kub</h1>";
});*/

/*Route::get('/users', function () {
    echo "Hello Phanurat";
    echo "Hello Phanurat";
    echo "Hello Phanurat";
});*/

#Get Parametor

/*Route::get('/users/{name}', function ($name){
    echo "<h1>Hello $name </h1>";
}):*/

Route::get('/users/{fname}/{lname}', function ($fname, $lname){
    echo "<h1>fisrtname $fname</h1>";
    echo "<h1>lastname $lname</h1>";
});

Route::get('products/{name}/{price}', function($name, $price){
    echo "<h1>Name product : $name </h1>";
    echo "<h1>Price : $price</h1>";
});

#View Files Balde
Route::get('/about', function () {
    return view('about');
});

Route::get('/member', function () {
    return view('member/index');
});

Route::get('/admin', function (){
    return view('admin/index');
});
