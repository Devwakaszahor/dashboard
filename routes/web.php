<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('DriverDetail', [HomeController::class,'DriverDetail'])->name('DriverDetail');
Route::get('AddNewDriver', [HomeController::class,'addDriverDetail'])->name('AddNewDriver');


Route::get('RouteDetail', [HomeController::class,'RouteDetail'])->name('RouteDetail');
Route::get('AddNewRoute', [HomeController::class,'addRouteDetail'])->name('AddNewRoute');

Route::get('userprofile', [HomeController::class,'userprofile'])->name('userprofile');
Route::post('updateProfile', [HomeController::class,'updateProfile'])->name('updateProfile');

Route::get('expiredDocs', [HomeController::class,'GetExpiry'])->name('GetExpiry');

Route::get('reports', [HomeController::class,'reports'])->name('reports');
Route::get('generateReport', [HomeController::class,'generateReport'])->name('generateReport');
