<?php

use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Config\ContactusController;
use App\Http\Controllers\Admin\Config\SlideController;
use App\Http\Controllers\Admin\CreativaController;
use App\Http\Controllers\Admin\EntertainmentController;
use App\Http\Controllers\Admin\RecordController;
use App\Http\Controllers\Admin\TalentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\PageController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/', [PageController::class, 'index']);
Route::get('record', [PageController::class, 'record']);
Route::get('creativa', [PageController::class, 'creativa']);
Route::get('talent-management', [PageController::class, 'management']);
Route::get('entertainment', [PageController::class, 'entertainment']);
Route::get('profileTalent', [PageController::class, 'profileTalent']);
Route::get('contact-us', [PageController::class, 'contactUs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function() {
    Route::resource('record', RecordController::class);
    Route::resource('creativa', CreativaController::class);
    Route::resource('talent', TalentController::class);
    Route::resource('entertainment', EntertainmentController::class);
    Route::resource('contactus', ContactusController::class);
    Route::resource('user', UserController::class);
    Route::resource('slide', SlideController::class);
});
