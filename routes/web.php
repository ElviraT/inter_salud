<?php

use App\Http\Controllers\Admin\ComboController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\configuracion\direccion\CountryController;
use App\Http\Controllers\Admin\configuracion\direccion\StateController;
use App\Http\Controllers\Admin\configuracion\direccion\CityController;
use App\Http\Controllers\Admin\configuracion\direccion\MunicipalityController;
use App\Http\Controllers\Admin\configuracion\direccion\ParishController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lang/{language}', function ($language) {
    Session::put('language', $language);
    return redirect()->back();
})->name('language');

Route::middleware(['auth', 'translate'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('roles', RoleController::class)->except(['show'])->names('roles');
    Route::resource('countries', CountryController::class)->except(['show'])->names('countries');
    Route::resource('states', StateController::class)->except(['show'])->names('states');
    Route::resource('cities', CityController::class)->except(['show'])->names('cities');
    Route::resource('municipality', MunicipalityController::class)->except(['show'])->names('municipality');
    Route::resource('parishes', ParishController::class)->except(['show'])->names('parishes');
    Route::resource('users', UserController::class)->names('users');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ComboController::class)->prefix('combo')->group(function () {
        Route::match(['get', 'post'], '/{country}/state', 'state')->name('combo_estado');
    });
});

require __DIR__ . '/auth.php';
