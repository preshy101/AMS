<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::controller(AppointmentController::class)->group(function () {
    Route::get('/appointments', 'allAppointments')->name('appointment');
    Route::get('/update/result/appointment/{id}', 'ResultAppointment')->name('appoints.update');
    Route::post('/store/result/appointment/{id}', 'ResultStoreAppointment')->name('result.appointment');
    Route::post('/store/appointment', 'storeAppointment')->name('store.appoint');
    Route::post('/update/appointment/{id}', 'UpdateAppointment')->name('appoints.edit');
    Route::get('/delete/appointment/{id}', 'DeleteAppointment')->name('appoints.delete');

 });
require __DIR__.'/auth.php';