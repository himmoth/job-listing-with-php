<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/',[TodoController::class, 'index'])->name('todo');
Route::post('/todo',[TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/{id}',[TodoController::class, 'finished'])->name('todo.finished');
Route::get('/todo/delete/{id}',[TodoController::class, 'destroy'])->name('todo.delete');
Route::get('/todo/edit/{todo}',[TodoController::class, 'edit'])->name('todo.edit');
Route::post('/todo/upadate/{id}',[TodoController::class, 'update'])->name('todo.update');




