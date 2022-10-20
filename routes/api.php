<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\softwareController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\visitorController;
use App\Http\Controllers\DashboardController;
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

// PageView API
Route::get("/PagePerformance", [pageController::class, "PagePerformance"]);
Route::get("/PageView", [pageController::class, "PageView"]);

// Visitor API
Route::get("/ChannelType", [visitorController::class, "ChannelType"]);
Route::get("/Live", [visitorController::class, "Live"]);
Route::get("/VisitorLog", [visitorController::class, "VisitorLog"]);

//Software API's
Route::get("/Browser", [softwareController::class, "Browser"]);
Route::get("/operatingsystem", [softwareController::class, "operatingsystem"]);
Route::get("/plugin", [softwareController::class, "plugin"]);
Route::get("/engine", [softwareController::class, "engine"]);

//Location API
Route::get("/Country", [locationController::class, "Country"]);
Route::get("/Continent", [locationController::class, "Continent"]);
Route::get("/Region", [locationController::class, "Region"]);
Route::get("/City", [locationController::class, "City"]);

//Device API's
Route::get("/DeviceBrand", [DeviceController::class, "DeviceBrand"]);
Route::get("/DeviceType", [DeviceController::class, "DeviceType"]);
Route::get("/ScreenResolution", [DeviceController::class, "ScreenResolution"]);
Route::get("/DeviceModel", [DeviceController::class, "DeviceModel"]);

//Dashboard APIs
Route::get("/TotalVisitors", [DashboardController::class, "TotalVisitors"]);
Route::get("/VisitorOverDay", [DashboardController::class, "VisitorOverDay"]);
