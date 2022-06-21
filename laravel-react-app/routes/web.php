<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Auth::routes();
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('projects/add', [ProjectController::class, 'insert']);
Route::post('projects', [ProjectController::class, 'store']);
Route::get('projects/show/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('projects/edit/{id}', [ProjectController::class, 'update'])->name('update');
Route::delete('projects/show/{id}', [ProjectController::class, 'destroy'])->name('destroy');

Auth::routes();

// Task routs
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('tasks/add', [TaskController::class, 'insert']);
Route::post('tasks', [TaskController::class, 'store']);
Route::get('tasks/show/{id}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/edit/{id}', [TaskController::class, 'update'])->name('update');
Route::delete('tasks/show/{id}', [TaskController::class, 'destroy'])->name('destroy');


// User routs
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('users/add', [UserController::class, 'insert']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/show/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/edit/{id}', [UserController::class, 'update'])->name('update');
Route::delete('users/show/{id}', [UserController::class, 'destroy'])->name('destroy');


Route::get('/customer', [CustomerController::class, 'index'])->name('customer');


Route::get('/project', [ProjectController::class, 'indexObserver']);
