<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::group(['as' => 'movies.', 'prefix' => '/movies'], function () {
    Route::get('/',[MovieController::class,'index'])->name('index');

    Route::post('/{id}/tickets',[TicketController::class,'store'])
        ->name('store')
        ->where('id', '[0-9]+')
        ->middleware('auth:sanctum');

    Route::get('/reserved/seats',[SeatController::class,'showReservedSeats'])->name('show_reserved_seats');
    Route::get('/{id}/open/seats',[SeatController::class,'showMovieEmptySeats'])->name('show_movie_empty_seats')->where('id', '[0-9]+');
});
