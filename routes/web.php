<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']); 

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', function (){
    return view('register');
})->name('register');
Route::post('/register', [AuthController::class, 'register']); 


// admin routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

use App\Http\Controllers\ChatController;

Route::middleware('auth')->group(function () {

    Route::get('/chat/{userId}', [ChatController::class, 'index']);

    Route::get('/messages/{userId}', [ChatController::class, 'fetch']);

    Route::post('/messages', [ChatController::class, 'send']);

});
