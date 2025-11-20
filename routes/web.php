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

// Route per la pagina prenotazioni
Route::get('/prenota', function () {
    return view('prenota');
});
