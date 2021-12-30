<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\AdminController;

use App\http\controllers\DashboardController;

use App\http\controllers\EmployeeController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard_view',[DashboardController::class,'dashboard']);

Route::get('/team_members_view',[AdminController::class,'teammem']);

Route::get('/settings_view',[AdminController::class,'settings']);

Route::post('/employee',[AdminController::class,'employee']);

Route::get('/team_members_view',[EmployeeController::class,'show']);






// Route::resource('/employee','EmployeeController');