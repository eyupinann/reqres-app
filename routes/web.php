<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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


Route::get('/', [APIController::class, 'index'])->name('index');
Route::get('detail/{id}', [APIController::class, 'detail'])->name('detail');
Route::get('create', [APIController::class, 'create_view'])->name('create_view');
Route::post('create', [APIController::class, 'create'])->name('create');
Route::get('edit/{id}', [APIController::class, 'edit_view'])->name('edit_view');
Route::post('edit/{id}', [APIController::class, 'edit'])->name('edit');
Route::get('destroy/{id}', [APIController::class, 'destroy'])->name('destroy');
