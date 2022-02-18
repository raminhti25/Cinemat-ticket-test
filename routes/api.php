<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;

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


Route::group(['as' => 'movies.', 'prefix' => '/movies'], function () {
    Route::get('/',[MovieController::class,'index'])->name('index');
    Route::get('/{id}/open/seats',[SeatController::class,'showMovieEmptySeats'])->name('showMovieEmptySeats');

    Route::post('/{id}/tickets',[TicketController::class,'store'])->name('store');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
