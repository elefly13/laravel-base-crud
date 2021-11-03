<?php

use Illuminate\Support\Facades\Route;
use App\Comic;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = Comic::all();
    return view('home', compact('comics'));
    
})->name('pagina-home');

Route::get('/main', function () {
    return view('main');
})->name('pagina-main-home');


Route::resource('/comics', 'ComicController');