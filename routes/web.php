<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\PageController;
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

Route::get('/login', function () {
    return view('auth.login');
});





Route::get('record', [PageController::class, 'record']);
Route::get('creativa', [PageController::class, 'creativa']);
Route::get('talent-management', [PageController::class, 'management']);
Route::get('entertainment', [PageController::class, 'entertainment']);
Route::get('profileTalent', [PageController::class, 'profileTalent']);
Route::get('contact-us', [PageController::class, 'contactUs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
