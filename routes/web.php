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

    $saluto = "Ciao da Laravel";

    // utilizziamo la funzione compact per passare delle variabili
    return view('home', compact("saluto"));
});

Route::get('/image', function () {
    return view("image");
})->name('image');