<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/comics/trash', [ComicController::class, 'trash'])->name('comics.trash')->withTrashed();
Route::patch('/comics/{comic}/restore', [ComicController::class, 'restore'])->name('comics.restore')->withTrashed();
Route::delete('/comics/{comic}/drop', [ComicController::class, 'drop'])->name('comics.drop')->withTrashed();


Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show')->withTrashed();
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update')->withTrashed();
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit')->withTrashed();
