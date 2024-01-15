<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    ProfileController,
    UserController,
    UploadController
};

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
//redirects urls
Route::group([],function(){
    Route::redirect('/', '/app/dashboard');
    Route::redirect('/dashboard', '/app/dashboard');
    Route::redirect('/admin', '/app/dashboard');
});

Route::prefix('app')->middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
    Route::get('/profile/{username}', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{username}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get("change-password", [ProfileController::class, "changePassword"])->name("change-password");
    Route::put("change-password", [ProfileController::class, "updatePassword"])->name("change-password.update");

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/users', [UserController::class, 'users'])->name('users-all');

    // media
    Route::get('/media', [UploadController::class, 'index'])->name('media');
    Route::post('/media', [UploadController::class, 'store'])->name('media.store');
    Route::delete('/media/{id}', [UploadController::class, 'destroy'])->name('media.destroy');
    Route::post('/media/{id}/restore', [UploadController::class, 'restore'])->name('media.restore');
    Route::post('/media/{id}/delete', [UploadController::class, 'delete'])->name('media.delete');
    Route::post('/media/{id}/force-delete', [UploadController::class, 'forceDelete'])->name('media.force-delete');
    
});
