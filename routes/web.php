<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\PageController;
use App\Http\Controllers\back\AddController;
use App\Http\Controllers\back\DeleteController;
use App\Http\Controllers\back\UpgradeController;
use App\Http\Controllers\back\ShowController;
use App\Http\Controllers\back\UserController;

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
Route::prefix('/admin')->name('admin.')->group(function () {
    //Back Routes
    Route::get('/dashboard',ShowController::class)->name('dashboard');
    Route::controller(AddController::class)->group(function () {
        Route::prefix('/add')->group(function () {

        });
    });
//Panel Login Routes
    Route::controller(UserController::class)->group(function () {
        Route::prefix('/login')->group(function () {

        });
    });
//Delete Routes
    Route::controller(DeleteController::class)->group(function () {
        Route::prefix('/delete')->group(function () {

        });
    });
//Upgrade Routes

    Route::controller(UpgradeController::class)->group(function () {
        Route::prefix('/update')->group(function () {

        });
    });
//Show Routes
    Route::controller(ShowController::class)->group(function () {
        Route::prefix('/show')->group(function () {

        });
    });
});
