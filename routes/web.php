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

Route::get('/', function () {
    return inertia('Home');
});


Route::get('/users', function () {
    return inertia('Users/Index', [
        'users' => User::query()->when(request('search'), function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })->paginate(10)
        ->withQueryString()
        ->through(fn ($user) => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ]),
        'filters' => request()->only(['search'])
    ]);
});


Route::get('/settings', function () {
    return inertia('Settings');
});

Route::delete('/logout', function () {
    dd('users logout success');
});
