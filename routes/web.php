<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotificationController;

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

Route::get('login', [AuthenController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);

Route::get('register', [AuthenController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);

Route::post('logout', [AuthenController::class, 'logout'])->name('logout');

Route::get('member', [MemberController::class, 'dashboard'])
    ->name('member.dashboard')
    ->middleware(['auth', isMember::class]);
Route::get('admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth', isAdmin::class]);


    Route::get('pusher', function () {
        return view('pusher');
    });

Route::middleware(['auth'])->group(function () {
    Route::get('member/notification', [NotificationController::class, 'index'])->name('member.notifications');
});