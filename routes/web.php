<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\AdminController;

use App\http\controllers\DashboardController;

use App\http\controllers\EmployeeController;

use App\http\controllers\MarketingController;
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



// Settings

Route::get('/settings_view',[AdminController::class,'settings']);

// Settings end


// Team members

Route::get('/team_members_view',[EmployeeController::class,'intex']);

Route::post('/employee',[EmployeeController::class,'store']);

Route::get('update-employee/{id}',[EmployeeController::class,'edit']);

Route::put('update-employee',[EmployeeController::class,'update']);

Route::delete('delete-employee',[EmployeeController::class,'destroy']);

// Team members end


// Markting

Route::get('/marketing_view',[MarketingController::class,'intex']);

// Marketing end


