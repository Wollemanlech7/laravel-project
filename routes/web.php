<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Boxoffice\LoginController;
use App\Http\Controllers\Boxoffice\SubjectController;
use App\Http\Controllers\Boxoffice\ModuleController;
use App\Http\Controllers\Boxoffice\BoxofficeController;
use App\Http\Controllers\Boxoffice\ProfileController;


Route::get('/', function () {
    return view('index'); 
});

// LOGIN
Route::get('/boxoffice/login', [LoginController::class, 'index'])->name('boxoffice.login');
Route::post('/boxoffice/login', [LoginController::class, 'store']);
Route::get('/boxoffice/logout', [LoginController::class, 'logout'])->name('boxoffice.logout');

Route::group([  'middleware'    => 'boxoffice.auth',
                'prefix'        => 'boxoffice'  ], function () {
    //INDEX
    Route::get('/', [BoxofficeController::class, 'index'])->name('boxoffice.dashboard');
    
    //PROFILE
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    //SUBJECTS
    Route::get('/subjects', [SubjectController::class, 'index'])->name('subject.index');
    Route::get('/subjects/create', [SubjectController::class, 'create']);
    Route::post('/subjects/new', [SubjectController::class, 'save'])->name('subject.save');

    Route::get('/subjects/{subject_id}', [ModuleController::class, 'index']);
});

Route::get('/test', [BoxofficeController::class, 'prueba']);

