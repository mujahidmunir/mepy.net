<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Config\ArticleController;
use App\Http\Controllers\Admin\Config\CategoriesController;
use App\Http\Controllers\Admin\Config\ClientController;
use App\Http\Controllers\Admin\Config\ContactusController;
use App\Http\Controllers\Admin\Config\SlideController;
use App\Http\Controllers\Admin\CreativaController;
use App\Http\Controllers\Admin\EntertainmentController;
use App\Http\Controllers\Admin\RecordController;
use App\Http\Controllers\Admin\TalentController;

Route::group(['middleware' => ['auth:web','role:admin|super_admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resources([
        'record'        => RecordController::class,
        'creativa'      => CreativaController::class,
        'talent'        => TalentController::class,
        'entertainment' => EntertainmentController::class,
        'contactus'     => ContactusController::class,
        'user'          => UserController::class,
        'slide'         => SlideController::class,
        'categories'    => CategoriesController::class,
        'clients'       => ClientController::class,
        'article'       => ArticleController::class,
    ]);

});
