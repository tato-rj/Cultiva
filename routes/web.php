<?php

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

Route::get('dev', function() {
	return view('dev');
})->name('dev');

Route::get('go', function() {
	session(['dev' => true]);

	return redirect(route('principal'));
})->name('dev.go');

Route::get('/', function () {
    return view('principal.index');
})->name('principal');
