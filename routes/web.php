<?php

use App\Http\Controllers\TelegramController;
use App\Http\Middleware\TelegramMiddleware;
use App\Livewire\TelegramConnectUser;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::middleware(TelegramMiddleware::class)->group(function(){
        Route::view('', 'dashboard')->name('dashboard');
        Route::view('dashboard', 'dashboard')->name('dashboard');
        Route::view('profile', 'profile')->name('profile');
    });

    Route::get('telegram/connect/user', TelegramConnectUser::class)->name('telegram.connect.user');
});

Route::get('telegram/callback/connect/user', [TelegramController::class, 'callbackConnectionUser'])->name('telegram.callback.connect.user');



require __DIR__.'/auth.php';
