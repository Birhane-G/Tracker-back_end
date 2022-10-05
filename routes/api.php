<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\softwareController;
use App\Http\Controllers\pageController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('signup', [userController::class, 'signup']);
Route::post('signin', [userController::class, 'signin']);

Route::get("/pageview", [pageController::class, "pagePerformance"]);

//Software API's
Route::get("/Browser/{id?}", [softwareController::class, "Browser"]);