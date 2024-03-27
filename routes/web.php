<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\API\ApartmentController;
use App\Http\Controllers\Guest\PageController as GuestPageController;

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

Route::get('/', [GuestPageController::class, 'index'])->name('guest.home');


Route::middleware(['auth', 'verified'])
  ->prefix('admin')
  ->name('admin.')
  ->group(function () {

    Route::get('/', [AdminPageController::class, 'index'])->name('home');
    Route::get('register-apartment', [AdminPageController::class, 'viewApartmentRegistrationForm'])->name('register-apartment');
  });

Route::prefix('apartments')->group(function () {
  Route::get('/', [ApartmentController::class, 'index'])->name('apartments.index');
  Route::post('/', [ApartmentController::class, 'store'])->name('apartments.store');
  Route::get('/{id}', [ApartmentController::class, 'show'])->name('apartments.show');
});

require __DIR__ . '/auth.php';
