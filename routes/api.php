<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TraderController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{events}', [EventController::class, 'show']);
Route::put('/events/{events}', [EventController::class, 'update']);
Route::post('/events/{events}', [EventController::class, 'store']);
Route::delete('/events/{events}', [EventController::class, 'destroy']);

Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/tickets/{ticket}', [TicketController::class, 'show']);
Route::put('/tickets/{ticket}', [TicketController::class, 'update']);
Route::post('/tickets/{ticket}', [TicketController::class, 'store']);
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy']);

Route::get('/traders', [TraderController::class, 'index']);
Route::get('/traders/{trader}', [TraderController::class, 'show']);
Route::put('/traders/{trader}', [TraderController::class, 'update']);
Route::post('/traders/{trader}', [TraderController::class, 'store']);
Route::delete('/traders/{trader}', [TraderController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::post('/users/{user}', [UserController::class, 'store']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);