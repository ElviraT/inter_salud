<?php

use App\Http\Controllers\Admin\ComboController;
use App\Http\Controllers\Admin\configuracion\combos\MaritalStatusController;
use App\Http\Controllers\Admin\configuracion\combos\PrefixController;
use App\Http\Controllers\Admin\configuracion\combos\SexController;
use App\Http\Controllers\Admin\configuracion\combos\StatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\configuracion\direccion\CountryController;
use App\Http\Controllers\Admin\configuracion\direccion\StateController;
use App\Http\Controllers\Admin\configuracion\direccion\CityController;
use App\Http\Controllers\Admin\configuracion\direccion\MunicipalityController;
use App\Http\Controllers\Admin\configuracion\direccion\ParishController;
use App\Http\Controllers\Admin\configuracion\LimitController;
use App\Http\Controllers\Admin\configuracion\users\DoctorController;
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
    Route::resource('limits', LimitController::class)->except(['show', 'destroy'])->names('limits');
    Route::resource('roles', RoleController::class)->except(['show'])->names('roles');
    Route::resource('countries', CountryController::class)->except(['show', 'create'])->names('countries');
    Route::resource('states', StateController::class)->except(['show', 'create'])->names('states');
    Route::resource('cities', CityController::class)->except(['show', 'create'])->names('cities');
    Route::resource('municipality', MunicipalityController::class)->except(['show', 'create'])->names('municipality');
    Route::resource('parishes', ParishController::class)->except(['show', 'create'])->names('parishes');
    Route::resource('prefixes', PrefixController::class)->except(['show', 'create'])->names('prefixes');
    Route::resource('sexes', SexController::class)->except(['show', 'create'])->names('sexes');
    Route::resource('status', StatusController::class)->except(['show', 'create'])->names('status');
    Route::resource('maritalStatus', MaritalStatusController::class)->except(['show', 'create'])->names('maritalStatus');

    Route::resource('users', UserController::class)->names('users');
    Route::resource('usersm', DoctorController::class)->names('usersm');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ComboController::class)->prefix('combo')->group(function () {
        Route::match(['get', 'post'], '/{country}/state', 'state')->name('combo_estado');
    });
});

require __DIR__ . '/auth.php';
