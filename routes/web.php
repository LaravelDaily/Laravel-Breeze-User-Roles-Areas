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

Route::middleware(['auth', 'verified'])
    ->prefix('student')
    ->name('student.')
    ->group(function() {
        Route::get('/timetable', [\App\Http\Controllers\Student\TimetableController::class, 'index'])
            ->name('timetable');
    });

Route::middleware(['auth', 'verified'])
    ->prefix('teacher')
    ->name('teacher.')
    ->group(function() {
        Route::get('/timetable', [\App\Http\Controllers\Teacher\TimetableController::class, 'index'])
            ->name('timetable');
    });

require __DIR__.'/auth.php';
