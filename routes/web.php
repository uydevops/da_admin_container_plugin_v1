<?php

use App\Http\Controllers\MainController;
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


Route::get('/login', [MainController::class, 'login'])->name('login');

Route::post('user_login', [MainController::class, 'user_login'])->name('user_login');



//backend folder admin route group
Route::group(['prefix' => 'backend', 'as' => 'backend.'], function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
});
