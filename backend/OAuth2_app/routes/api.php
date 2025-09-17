<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\SocialiteAuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::get('provider' , [SocialiteAuthController::class, 'provider']);

Route::middleware('web')->group(function () {
    Route::controller(SocialiteAuthController::class)->group(function(){
        Route::get('oauth/{provider}/redirect', 'redirect');
        Route::get('oauth/{provider}/callback', 'authenticate');
});
});
