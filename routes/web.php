<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitantesController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::resource('visitantes', [VisitantesController::class]);


Route::get("/visitantes", [VisitantesController::class, 'index'])->name('visitantes.index');
Route::post("/visitantes/salvar", [VisitantesController::class, 'salvar']);
