<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Boxoffice\LoginController;
use App\Http\Controllers\Boxoffice\SubjectController;
use App\Http\Controllers\Boxoffice\ModuleController;
use App\Http\Controllers\Boxoffice\BoxofficeController;
use App\Http\Controllers\Boxoffice\ProfileController;




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
    return view('index'); 
});


Route::prefix('boxoffice')->group(function () {
    // LOGIN
    Route::get('/login', [LoginController::class, 'index'])->name('boxoffice.login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('boxoffice.logout');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');


    Route::get('/', [BoxofficeController::class, 'index']);

    //SUBJECTS
    Route::get('/subjects', [SubjectController::class, 'index']);
    Route::get('/subjects/create', [SubjectController::class, 'create']);
    Route::post('/subjects/new', [SubjectController::class, 'save'])->name('subject.save');

    Route::get('/subjects/{subject_id}', [ModuleController::class, 'index']);
});

Route::get('/test', [LoginController::class, 'prueba']);

