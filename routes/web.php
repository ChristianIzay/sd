<?php

use App\Models\Cours;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;
use App\Http\Controllers\chartController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\PromotionsController;

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
    //return Activity::all(); //activités logs
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/promotions/{id}/eleves', [App\Http\Controllers\ElevesController::class, 'show'])->name('eleves.index');
Route::resource('promotions', PromotionsController::class);
Route::get('chart-js', [chartController::class, 'index']);

Route::get('/activity', [App\Http\Controllers\ActivitylogController::class, 'index'])->name('activity');
Route::get('/cours', [App\Http\Controllers\ProfController::class, 'index'])->name('cours');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

