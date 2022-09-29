<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

// Route::middleware('auth')->get('/home', 'HomeController@index')->name('home');

//Proteggo tutte le rotte con il middleware: devo essere autenticato altrimenti non accedo al Link ma mi viene restituita la pagina di login
Route::middleware('auth')
    //# aggiorna la cartella all'interno della quale si trovano i controller
    ->namespace('Admin')
    // § aggiorna il name di ogni "subroute" con un prefisso admin.
    ->name('admin.')
    // aggiorna ogni url con un prefisso admin/
    ->prefix('admin')
    //ragqruppa varie rotte
    ->group(function (){
            Route::get('/', 'HomeController@index')->name('home');
            Route::resource('/posts', 'PostController');
            Route::resource('/categories', 'CategoryController');
            Route::resource('/tags', 'TagController');

});
// Route::middleware('auth')->resource('/posts', 'PostsController');

Route::get("{any?}", function() {
    return view("guest.home");
})->where("any", ".*");
