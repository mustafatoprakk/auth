<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mloginController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('course', function () {
    return view('course');
})->middleware('auth');

Route::get('mlogin', [mloginController::class, 'index'])->name('mlogin');
Route::post('mloginCheck', [mloginController::class, 'authenticate'])->name('mloginCheck');

Route::get('mlogout', [mloginController::class, 'mlogout'])->name('mlogout');






