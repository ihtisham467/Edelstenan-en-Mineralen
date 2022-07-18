<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MineralController;
use App\Http\Controllers\StoneController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/stones/all', [StoneController::class, 'all'])->name('stones.all');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('minerals', MineralController::class);
    Route::get('/delete-mineral/{id}', [MineralController::class, 'deleteMineral'])->name('delete_mineral');
    Route::resource('forms', FormController::class);
    Route::get('/delete-form/{id}', [FormController::class, 'deleteForm'])->name('delete_form');
    Route::resource('stones', StoneController::class);
    Route::get('/delete-stone/{id}', [StoneController::class, 'deleteStone'])->name('delete_stone');
});
