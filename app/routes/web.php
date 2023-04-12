<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('services')->name('services')->group(function(){
    Route::get('/', function () {
        return view('products-services.services');
    }); 
});

Route::prefix('products')->name('products')->group(function(){
    Route::get('/', function () {
        return view('products-services.products');
    });
      
});

Route::prefix('news')->name('news')->group(function(){
    Route::get('/', function () {
        return view('news');
    });
});

Route::get('/about', function () {
    return view('about');
}); 

Route::get('/quotation', function () {
    return view('quote');
})->name('quotation');


Route::name('about')->group(function() {

    Route::get('/contact-us', function () {
        return view('about.contact');
    })->name('.contact');
    
    Route::get('/team', function () {
        return view('about.team');
    })->name('.team');
    
    Route::get('/mission', function () {
        return view('about.mission');
    })->name('.mission');

    Route::get('/vision', function () {
        return view('about.vision');
    })->name('.vision');

    Route::get('/partners', function () {
        return view('about.partners');
    })->name('.partners');
});
