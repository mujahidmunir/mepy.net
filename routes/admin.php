<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Config\ContactusController;
use App\Http\Controllers\Admin\Config\SlideController;
use App\Http\Controllers\Admin\CreativaController;
use App\Http\Controllers\Admin\EntertainmentController;
use App\Http\Controllers\Admin\RecordController;
use App\Http\Controllers\Admin\TalentController;

Route::group(['middleware' => ['auth:web','role:admin|super_admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('record', RecordController::class);
    Route::resource('creativa', CreativaController::class);
    Route::resource('talent', TalentController::class);
    Route::resource('entertainment', EntertainmentController::class);
    Route::resource('contactus', ContactusController::class);
    Route::resource('user', UserController::class);
    Route::resource('slide', SlideController::class);


});
