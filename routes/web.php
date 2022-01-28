<?php

use App\Http\Controllers\TodoListController;
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

Route::get('/todo-list', [TodoListController::class, 'index'])->name('todo');

Route::get('/todo-list/{id}', [TodoListController::class, 'show'])->name('todo.edit');

Route::post('/todo-list', [TodoListController::class, 'store'])->name('todo.store');

Route::post('/todo-list/{id}', [TodoListController::class, 'update'])->name('todo.update');

Route::get('/todo-list/{id}/delete', [TodoListController::class, 'delete'])->name('todo.delete');
