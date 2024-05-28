<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\DocumentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/document', function () {
    return view('layouts.document.document');
})->name('document');

Route::get('/statistics', function () {
    return view('layouts.statistics.statistics');
})->name('statistics');

Route::get('/academic', function () {
    return view('gallerypdf.academic');
})->name('academic');

Route::get('/carreras', function () {
    return view('gallerypdf.carreras');
})->name('carreras');

Route::get('/graduantes', function () {
    return view('layouts.graduantes.graduantes');
})->name('graduantes');

Route::get('/calendar', function () {
    return view('layouts.calendar.calendar');
})->name('calendar');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard/formulario', function () {
    return view('dashboard.formulario');
})->name('dashboard.formulario');


Route::get('upload-pdf', function () {
    return view('upload');
})->name('pdf.upload.form');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DocumentoController::class, 'index'])->name('dashboard');
    Route::post('upload-pdf', [DocumentoController::class, 'upload'])->name('pdf.upload');
    Route::get('/documentos/{id}/edit', [DocumentoController::class, 'edit'])->name('documentos.edit');
    Route::put('/documentos/{id}', [DocumentoController::class, 'update'])->name('documentos.update');
    Route::delete('/documentos/{id}', [DocumentoController::class, 'destroy'])->name('documentos.destroy');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
