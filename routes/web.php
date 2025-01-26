<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::prefix('employees')->name('employees.')->controller(EmployeeController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('/{id}/show', 'show')->name('show')->where('id', '[0-9]+');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
    Route::post('/{id}/update', 'update')->name('update')->where('id', '[0-9]+');
    Route::delete('/{id}', 'destroy')->name('destroy')->where('id', '[0-9]+');
});
