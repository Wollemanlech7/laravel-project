<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicWeb\IndexController;
use App\Http\Controllers\Boxoffice\LoginController;
use App\Http\Controllers\Boxoffice\SubjectController;
use App\Http\Controllers\Boxoffice\ModuleController;


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

Route::get('/', [IndexController::class, 'index']);


Route::prefix('dashboard')->group(function () {
    // LOGIN
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'store'])->name('dashboard.login');
    Route::get('/logout', [LoginController::class, 'logout']);

    //SUBJECTS
    Route::get('/subjects', [SubjectController::class, 'index']);
    Route::get('/subjects/create', [SubjectController::class, 'create']);
    Route::post('/subjects/new', [SubjectController::class, 'save'])->name('subject.save');

    Route::get('/subjects/modules', [ModuleController::class, 'index']);
});

Route::get('/test', function() {
    return view('test');
});

