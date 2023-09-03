<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController as DashboardController;
use App\Http\Controllers\Admin\AnimalController as AnimalController;
use App\Http\Controllers\Admin\VaccineController as VaccineController;
use App\Http\Controllers\Admin\ContactController as ContactController;
use App\Http\Controllers\Admin\BreedController as BreedController;

use App\Http\Controllers\Admin\OwnerController as OwnerController;


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
})->name('home');


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('animals', AnimalController::class);
    Route::resource('vaccines', VaccineController::class);
    Route::resource('breeds', BreedController::class);
    Route::get('/contacts',[ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}',[ContactController::class, 'show'])->name('contacts.show');
    Route::resource('owners', OwnerController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
