<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Authcontroller;

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
    return view('welcome');
});

Route::get('/register',[Authcontroller::class,'register'])->name('register');
Route::get('/login',[Authcontroller::class,'login'])->name('login');

Route::post('/add_user',[Authcontroller::class,'add_user'])->name('add_user');
