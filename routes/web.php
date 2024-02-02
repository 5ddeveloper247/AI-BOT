<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', function () {
    return view('home');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(FrontendController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/product', 'product')->name('product');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/tools', 'tools')->name('tools');
    Route::get('/support', 'support')->name('support');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/term-condition', 'termCondition')->name('term-condition');
    Route::get('/plans', 'plans')->name('plans');
    Route::get('/payment', 'payment')->name('payment');
    Route::get('/chat', 'chat')->name('chat');

});
require __DIR__.'/auth.php';
