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

Route::get('/', function () {
    return view('welcome');
});

Route::get('request/{status?}', 'ServicesController@services');

Route::get('accept-request/{id}', 'ServicesController@accept_request');

Route::get('accept-payments/{id}', 'ServicesController@accept_payment');

Route::get('slot-booking/{id}', 'ServicesController@slotBooking');