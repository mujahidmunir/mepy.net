<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\MasterController;
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





Route::get('record', [MasterController::class, 'record']);
Route::get('creativa', [MasterController::class, 'creativa']);
Route::get('management', [MasterController::class, 'management']);
Route::get('entertainment', [MasterController::class, 'entertainment']);
Route::get('profileTalent', [MasterController::class, 'profileTalent']);
