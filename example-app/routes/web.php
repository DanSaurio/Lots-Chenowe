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
    print"Wenas Tardes Pá k rollo";
    return view('welcome');
});

Route::get('/saludos', function(){
    print"Esta es una Ruta Hecha por Dan:D";
});
