<?php

use App\Http\Controllers\MainController;
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


Route::controller(MainController::class)
->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/contactus','contactus')->name('contact');
    Route::post('/contactus','contactpost')->name('contact.post');
});
