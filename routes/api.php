<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;



Route::get('/clients', [ClientController::class, 'index']);  // Route primary
Route::post('/clients', [ClientController::class, 'store']); // Send data base
Route::get('/clients/{id}', [ClientController::class, 'show']);   // To bring data base info