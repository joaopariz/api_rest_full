<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\apiController;



Route::get('/', function () {

    $parents = Http::get('https://api.github.com/users/joaopariz');
    $apiArray = $parents->json();

    return view('api', ['apiArray' => $apiArray]);
});
