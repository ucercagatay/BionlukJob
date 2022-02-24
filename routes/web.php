<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\PageController;
use App\Http\Controllers\back\AddController;
use App\Http\Controllers\back\DeleteController;
use App\Http\Controllers\back\UpgradeController;
use App\Http\Controllers\back\ShowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Front Routes
Route::controller(PageController::class)->group(function () {
    Route::prefix('/page')->group(function () {

    });
});
//Back Routes
Route::controller(AddController::class)->group(function () {
    Route::prefix('/page')->group(function () {

    });
});
//Delete Routes

Route::controller(DeleteController::class)->group(function () {
    Route::prefix('/page')->group(function () {

    });
});
//Upgrade Routes

Route::controller(UpgradeController::class)->group(function () {
    Route::prefix('/page')->group(function () {

    });
});
//Show Routes
Route::controller(ShowController::class)->group(function () {
    Route::prefix('/page')->group(function () {

    });
});
