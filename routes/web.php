<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;



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



Auth::routes();


//patients routes
Route::middleware(['auth', 'role:patient'])->group(function () {
Route::get('/patients','PatientController@index')->name('patients.index');
//appointments
Route::get('appointments/create', 'AppointmentController@create')->name('appointments.create');
Route::post('appointments', 'AppointmentController@store')->name('appointments.store');
Route::get('appointments', 'AppointmentController@index')->name('appointments.index');
});

Route::middleware(['auth'])->group(function () {
Route::get('/home', 'HomeController@index')->name('home');
//patients
Route::get('/patients/info','PatientController@insert')->name('patients.insert');
Route::put('/patients/save','PatientController@save')->name('patients.save');
//doctors
Route::get('/doctors/info','DoctorController@insert')->name('doctors.insert');
Route::put('/doctors/save','DoctorController@save')->name('doctors.save');
});

Route::middleware(['auth', 'role:doctor'])->group(function () {
Route::get('/doctors','DoctorController@index')->name('doctors.index');
});



