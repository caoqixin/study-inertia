<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::controller(\App\Http\Controllers\UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/create', 'create');
    Route::post('/users', 'store');
});


Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index']);
