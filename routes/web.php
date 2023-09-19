<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

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

Route::controller(SeriesController::class)->group(function(){
    
    Route::get('/series','index');
    Route::get('/series/view','listAll');
    Route::get('/series/list/{id}/{include?}','list')->where('id', '[0-9]+');

});