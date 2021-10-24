<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['middleware' => ['auth:web','role:admin|super_admin'], 'prefix' => 'dashboard'], function () {
    ROute::get('/', [DashboardController::class, 'index']);


});
