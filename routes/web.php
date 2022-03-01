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
    return view('front.welcome');
});
//Front Routes
Route::controller(PageController::class)->group(function () {
    Route::prefix('/page')->group(function () {

    });
});
Route::controller(UserController::class)->group(function () {
    Route::get('/admin/login','showLogin')->middleware('isOut')->name('admin.login');
    Route::post('admin/loginpost','login')->name('loginpost');
});
Route::prefix('/admin')->name('admin.')->middleware(['isLogin'])->group(function () {
    //Back Routes
    Route::get('/dashboard',[ShowController::class,'showDashboard'])->name('panel');
    Route::controller(AddController::class)->group(function () {
        Route::prefix('/add')->name('add.')->group(function () {
        Route::get('/category','addCategory')->name('category');
        Route::post('/postCategory','postCategory')->name('postCategory');
        Route::get('/projects','addProduct')->name('product');
        Route::post('/postProject','postProduct')->name('postProject');
        Route::get('/ımages','addImages')->name('images');
        Route::post('/ımagePost','postImages')->name('postImage');
        Route::get('/ımagePost','postImages')->name('postImage');
        });
    });
//Delete Routes
    Route::controller(DeleteController::class)->group(function () {
        Route::prefix('/delete')->group(function () {

        });
    });
//Upgrade Routes

    Route::controller(UpgradeController::class)->name('update.')->group(function () {
        Route::prefix('/update')->group(function () {
            Route::get('/category/{id}','getCategory')->name('category');
            Route::post('/postCategory/{id}','postCategory')->name('postCategory');
            Route::get('/project/{id}','getProject')->name('product');
            Route::post('/postProduct/{id}','postProduct')->name('postProduct');

        });
    });
//Show Routes
    Route::controller(ShowController::class)->group(function () {
        Route::prefix('/show')->name('show.')->group(function () {
        Route::get('/categories','showCategories')->name('category');
        Route::get('/products','showProducts')->name('product');


        });
    });
});
