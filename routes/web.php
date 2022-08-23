<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function() {
    return redirect('login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/counts', [DashboardController::class, 'index'])->name('counts');
Route::post('/create-proyek', [DashboardController::class, 'addDataProyek'])->name('proyek.add');

Route::get('/add-count', [DashboardController::class, 'addCountsView'])->name('addcounts.view');
Route::get('/update-count/{proyek_id}', [DashboardController::class, 'updateCountsView'])->name('updatecounts.view');
Route::put('/counts/update/{proyek_id}', [DashboardController::class, 'updateCounts'])->name('counts.update');
Route::delete('/counts/delete/{proyek_id}', [DashboardController::class, 'removeProyek'])->name('counts.delete');

Route::get('/profile/{user_id}', [DashboardController::class, 'profileView'])->name('profile');
Route::put('/profile/{user_id}', [DashboardController::class, 'profileUpdate'])->name('profile.update');

Route::get('/proyek/{proyek_id}', [DashboardController::class, 'proyekDetail'])->name('proyek');