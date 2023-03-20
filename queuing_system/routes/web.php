<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Devices;
use App\Http\Controllers\number_order;
use App\Http\Controllers\services;
use App\Http\Controllers\RegisterColler;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/new', function () {
    return view('dashboard.service.service_store');
});
Route::get('/a', function () {
    return view('dashboard.number_order.number_more');
});
Route::get('/ab', function () {
    return view('dashboard.administer.administer');
});
Route::get('/list', function () {
    return view('sessions.password.reset_error');
});
// Route::get('/menu', function () {
//     return view('menu');
// });

Route::get('/', function () {
    return redirect('sign-in');
})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
// Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
// Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
//

// Route::post('verify', [RegisterController::class, 'store'])->middleware('guest')->name('reset');


Route::get('error', [SessionsController::class, 'error'])->middleware('guest')->name('error');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');

Route::get('verify', [SessionsController::class, 'show'])->middleware('guest')->name('verify');
// Route::post('verify', [SessionsController::class, 'check'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'reset'])->middleware('guest')->name('reset');
Route::post('verify/{email}', [SessionsController::class, 'update'])->middleware('guest')->name('reset_chaged');

Route::get('user', [Devices::class, 'show'])->middleware('auth')->name('user');

// Route::get('device', [Devices::class, 'new'])->middleware('guest')->name('device');
// Route::get('/device', [Devices::class, 'new'])->name('device');








////////////////////////////////////////////////////////////////////////////
// Route::get('device', [Devices::class, 'new'])->middleware('auth')->name('device');


// Route::get('/devices', [devices::class, 'index'])->middleware('auth')->name('devices.index');


// Route::get('device/details/{id}', [devices::class, 'details'])->middleware('auth')->name('details');
// Route::get('device/details/update/{id}', [devices::class, 'update'])->middleware('auth')->name('update_devices');
// Route::get('update-check/{id}', [devices::class, 'updated_ed'])->middleware('auth')->name('update_check');





Route::get('device', [Devices::class, 'new'])->middleware('auth')->name('device');
Route::get('/devices', [Devices::class, 'index'])->middleware('auth')->name('devices.index');
Route::get('device/details/{id}', [Devices::class, 'details'])->middleware('auth')->name('details');
Route::get('device/more', [Devices::class, 'more'])->middleware('auth')->name('more');
Route::post('device/more', [Devices::class, 'more_update'])->middleware('auth')->name('more_update_device');

Route::get('device/details/update/{id}', [Devices::class, 'update'])->middleware('auth')->name('update_devices');
Route::post('device/details/update/{id}', [devices::class, 'updated_ed'])->middleware('auth')->name('update_check');
Route::get('update-check/{id}', [Devices::class, 'updated_ed'])->middleware('auth')->name('update_check');
Route::post('update-check/{id}', [Devices::class, 'updated'])->middleware('auth')->name('update_device');

///////////////////////////////////////////////////////////////////////////


Route::get('service', [services::class, 'new'])->middleware('auth')->name('service');
Route::post('service', [services::class, 'index'])->middleware('auth')->name('service.index');

Route::get('service/more', [services::class, 'store'])->middleware('auth')->name('service_store');

Route::post('service/more', [services::class, 'more'])->middleware('auth')->name('more_update');
Route::get('service/details/{id}', [services::class, 'details'])->middleware('auth')->name('service_details');
// Route::get('service/more_service', [services::class, 'more_service'])->middleware('auth')->name('more_service');
Route::get('service/update', [services::class, 'store'])->middleware('auth')->name('service_update');

// Route::get('service/more_service', [services::class, 'details'])->middleware('auth')->name('update_service');



Route::get('number_order}', [number_order::class, 'index'])->middleware('auth')->name('number_order');
Route::get('number_order/more}', [number_order::class, 'more'])->middleware('auth')->name('number_order_more');
// Route::get('number_order/more_update}', [number_order::class, 'update'])->middleware('auth')->name('update_number_order');
Route::post('number_order/more', [number_order::class, 'update'])->middleware('auth');

