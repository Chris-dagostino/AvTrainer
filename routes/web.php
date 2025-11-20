<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route per la home page
// Quando l'utente visita '/' (homepage), mostra la view 'home'
Route::get('/', function () {
    return view('home');
});
