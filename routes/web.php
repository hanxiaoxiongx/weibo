<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UsersController;

use App\Models\User;

Route::get('/', [StaticPagesController::class,'home'])->name('home');
Route::get('/helpp',[StaticPagesController::class,'helpp'])->name('helpp');
Route::get('/about', [StaticPagesController::class,'about'])->name('about');

Route::get('/signup', [UsersController::class,'create'])->name('signup');
Route::resource('users', UsersController::class);
